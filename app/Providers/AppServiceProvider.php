<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Request::macro('breadcrumbs', function() {
			return new Breadcrumbs($this);
		});
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
