<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\TourPackage;
use Illuminate\Support\Facades\View;


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
         });

         // On shared hosting (e.g. Hostinger), sync uploads to public_html/uploads so direct root URLs work
         $parentUploads = dirname(base_path()) . '/uploads';
         if (is_dir($parentUploads)) {
             foreach (['cars', 'tours', 'profile_image'] as $folder) {
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
