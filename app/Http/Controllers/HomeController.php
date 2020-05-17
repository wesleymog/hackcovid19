<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function universidades(){
        return view('universidade');
    }
    public function hospitais(){
        return view('hospitais');
    }
    public function materiais(){
        return view('materiais');
    }
}
