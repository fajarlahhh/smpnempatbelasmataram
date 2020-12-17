<?php

namespace App\Providers;

use App\Models\Berita;
use App\Models\Carousel;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
		$this->app->bind('path.public', function() {
			return base_path('public_html');
		});
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        config(['app.locale' => 'id']);
        \Carbon\Carbon::setLocale('id');
        Paginator::useBootstrap();
        date_default_timezone_set('Asia/Makassar');
    }
}
