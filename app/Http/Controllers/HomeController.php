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
    
    public function epis(){
        return view('epis');
    }
    
}
