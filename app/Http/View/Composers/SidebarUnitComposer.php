<?php

namespace App\Http\View\Composers;

use App\Models\UnitGroup;
use Illuminate\View\View;

class SidebarUnitComposer
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
        $view->with('unitGroups', UnitGroup::all());
    }
}
