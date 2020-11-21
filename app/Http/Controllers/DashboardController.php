<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {

        $activeUsers = User::where('last_action', '>=', Carbon::now()->subMinutes(5)->toDateTimeString())->get();

        return view('dashboard.index')->with(['activeUsers' => $activeUsers]);
    }
}
