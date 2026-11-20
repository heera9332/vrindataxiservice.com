<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\TourPackage;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('tourPackages', TourPackage::get());

            try {
                if (Schema::hasTable('categories')) {
                    $headerCategories = Category::where('status', 'active')
                        ->with(['posts' => function ($q) {
                            $q->where(function ($sub) {
                                $sub->where('status', 'published')
                                    ->orWhere('status', '1')
                                    ->orWhere('status', 1);
                            })
                            ->where(function ($sub) {
                                $sub->whereNull('published_at')
                                    ->orWhere('published_at', '<=', now());
                            })
                            ->orderBy('created_at', 'desc');
                        }])
                        ->orderBy('name')
                        ->get();

                    $categoriesBySlug = $headerCategories->keyBy('slug');

                    $view->with('headerCategories', $headerCategories);
                    $view->with('ourLocationPosts', $categoriesBySlug->get('our-location')?->posts ?? collect());
                    $view->with('bookTaxiPosts', $categoriesBySlug->get('book-taxi')?->posts ?? collect());
                    $view->with('servicesPosts', $categoriesBySlug->get('services')?->posts ?? collect());
                }
            } catch (\Throwable $e) {
                // Prevent CLI or early migration failures
            }
        });

        // On shared hosting (e.g. Hostinger), sync uploads to public_html/uploads so direct root URLs work
        $parentUploads = dirname(base_path()) . '/uploads';
        if (is_dir($parentUploads)) {
            foreach (['cars', 'tours', 'profile_image', 'posts'] as $folder) {
                $src = public_path("uploads/{$folder}");
                $dst = "{$parentUploads}/{$folder}";
                if (is_dir($src)) {
                    if (!is_dir($dst)) {
                        @mkdir($dst, 0755, true);
                    }
                    foreach (glob("{$src}/*.*") as $file) {
                        $target = "{$dst}/" . basename($file);
                        if (!file_exists($target)) {
                            @copy($file, $target);
                        }
                    }
                }
            }
        }
    }
}
