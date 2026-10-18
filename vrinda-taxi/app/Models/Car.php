<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_name',
        'slug',
        'car_image',
        'passengers',
        'bags',
        'ac_type',
        'fuel_type',
        'price_per_km',
        'base_fare',
        'car_model',
        'transmission_type',
        'description',
        'is_featured',
        'status',
        'sort_order'
    ];

    /**
     * Get the car image URL.
     */
    public function getImageUrlAttribute()
    {
        if (empty($this->car_image)) {
            return null;
        }

        if (filter_var($this->car_image, FILTER_VALIDATE_URL)) {
            return $this->car_image;
        }

        $filename = basename($this->car_image);

        // On shared hosting (Hostinger/cPanel), files in public_path are located at vrinda-taxi/public
        // which the web server serves directly at /vrinda-taxi/public/uploads/cars/...
        $appFolder = basename(base_path());
        if ($appFolder && !in_array(request()->getHost(), ['127.0.0.1', 'localhost'])) {
            return asset($appFolder . '/public/uploads/cars/' . $filename);
        }

        return asset('uploads/cars/' . $filename);
    }
}
