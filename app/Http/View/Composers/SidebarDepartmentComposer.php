<?php

namespace App\Http\View\Composers;

use App\Models\Department;
use Illuminate\View\View;

class SidebarDepartmentComposer
{



    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('departments', Department::all());
    }
}