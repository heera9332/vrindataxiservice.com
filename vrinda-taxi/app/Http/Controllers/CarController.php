<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Str;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::latest()->paginate(10);

        return view('admin.cars.index', compact('cars'));
    }
    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'car_name' => 'required',
            'car_image' => 'required|image',
            'transmission_type' => 'required|in:manual,automatic,semi_automatic',
            'car_model' => 'required',

        ]);

        $slug = Str::slug($request->car_name);

        $exists = Car::where('slug', $slug)->exists();

        if ($exists) {
            return back()
                ->withInput()
                ->with('error', 'This car name already exists. Please choose another name.');
        }

        try {

                $imageName = null;

                if ($request->hasFile('car_image')) {
                    $destinationPath = public_path('uploads/cars');
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    $imageName = time().'.'.$request->car_image->extension();

                    $request->car_image->move($destinationPath, $imageName);

                    // Sync to shared hosting root uploads/cars if directory exists
                    $parentPath = dirname(base_path()) . '/uploads/cars';
                    if (is_dir(dirname(base_path()) . '/uploads')) {
                        if (!is_dir($parentPath)) {
                            @mkdir($parentPath, 0755, true);
                        }
                        @copy($destinationPath . '/' . $imageName, $parentPath . '/' . $imageName);
                    }
                }

                Car::create([
                    'car_name' => $request->car_name,
                    'slug' => Str::slug($request->car_name),
                    'car_image' => $imageName,
                    'passengers' => $request->passengers,
                    'bags' => $request->bags,
                    'ac_type' => $request->ac_type,
                    'fuel_type' => $request->fuel_type,
                    'transmission_type' => $request->transmission_type,
                    'price_per_km' => $request->price_per_km,
                    'base_fare' => $request->base_fare,
                    'car_model' => $request->car_model,
                    'description' => $request->description,
                    'is_featured' =>  $request->is_featured ?? 0,
                    'status' => $request->status ?? 1,
                    'sort_order' =>  $request->sort_order ?? 0,
                ]);

                return redirect()->route('cars.index')
                    ->with('success', 'Car Added Successfully');
        }
        catch (QueryException $e) {
                            // Duplicate Slug Error
                            if ($e->errorInfo[1] == 1062) {

                                return redirect()
                                        ->back()
                                        ->withInput()
                                        ->with('error', 'This car already exists. Please use another car name.');
                            }
        }

        return redirect()->back()->withInput()->with('error', 'Something went wrong.');
    }
    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'car_name' => 'required',
            'car_image' => 'nullable|image',
            'transmission_type' => 'nullable|in:manual,automatic,semi_automatic',
            'car_model' => 'nullable',
        ]);

        $imageName = $car->car_image;

        if ($request->hasFile('car_image')) {
            $destinationPath = public_path('uploads/cars');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $parentPath = dirname(base_path()) . '/uploads/cars';

            // Delete old image if it exists
            if ($car->car_image) {
                if (file_exists($destinationPath . '/' . $car->car_image)) {
                    @unlink($destinationPath . '/' . $car->car_image);
                }
                if (file_exists($parentPath . '/' . $car->car_image)) {
                    @unlink($parentPath . '/' . $car->car_image);
                }
            }

            $imageName = time().'.'.$request->car_image->extension();

            $request->car_image->move($destinationPath, $imageName);

            // Sync new image to shared hosting root uploads/cars
            if (is_dir(dirname(base_path()) . '/uploads')) {
                if (!is_dir($parentPath)) {
                    @mkdir($parentPath, 0755, true);
                }
                @copy($destinationPath . '/' . $imageName, $parentPath . '/' . $imageName);
            }
        }

        $car->update([
            'car_name' => $request->car_name,
            'slug' => Str::slug($request->car_name),
            'car_image' => $imageName,
            'passengers' => $request->passengers,
            'bags' => $request->bags,
            'ac_type' => $request->ac_type,
            'fuel_type' => $request->fuel_type,
            'transmission_type' => $request->transmission_type,
            'car_model' => $request->car_model,
            'price_per_km' => $request->price_per_km,
            'base_fare' => $request->base_fare,
            'description' => $request->description,
            'is_featured' => $request->is_featured ?? 0,
            'status' => $request->status ?? 1,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()->route('cars.index')
            ->with('success', 'Car Updated Successfully');
    }

    public function destroy(Car $car)
    {
        if ($car->car_image) {
            $destinationPath = public_path('uploads/cars/' . $car->car_image);
            $parentPath = dirname(base_path()) . '/uploads/cars/' . $car->car_image;
            if (file_exists($destinationPath)) {
                @unlink($destinationPath);
            }
            if (file_exists($parentPath)) {
                @unlink($parentPath);
            }
        }

        $car->delete();

        return back()->with('success', 'Car Deleted Successfully');
    }
}