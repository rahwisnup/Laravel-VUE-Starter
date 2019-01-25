<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
// use Illuminate\Http\Resources\Json\Resource; //setting agar pada saat show bagian data tidak ditampilkan

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        //setting agar pada saat show bagian data tidak ditampilkan (http://backend.test/api/article/3)
        // Resource::withoutWrapping();
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
