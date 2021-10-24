<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer(
            '3i_school.layouts.master',
            function ($view) {
                $view->with('stemMenus', \App\Models\StemSubject::all());
            }
        );
        view()->composer(
            '3i_school.layouts.user_dashboard_master',
            function ($view) {
                $view->with('stemMenus', \App\Models\StemSubject::all());
            }
        );

        view()->composer(
            '3i_school.partials.header',
            function ($view) {
                $view->with('parentCategories', \App\Models\MockTestCategory::where('parent_id',Null)->get());
            }
        );

    }
}
