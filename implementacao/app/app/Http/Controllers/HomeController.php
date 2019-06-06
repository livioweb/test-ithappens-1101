<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Repositories\DashboardRepositories;

class HomeController extends Controller
{

    public $dr;
    /**
     * Create a new controller instance.
     *
     * @return void
     *
     */
    public function __construct(DashboardRepositories $dashboardRepositories)
    {
        $this->dr = $dashboardRepositories;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index( )
    {


        return view('home');

    }



}
