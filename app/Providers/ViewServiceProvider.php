<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        // Using class based composers...
        View::composer('sidebar.partials.department', 'App\Http\View\Composers\SidebarDepartmentComposer');
        View::composer('sidebar.partials.unit', 'App\Http\View\Composers\SidebarUnitComposer');

    }
}
