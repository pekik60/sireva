<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        // return $dec;
        return view('home');
    }
}
