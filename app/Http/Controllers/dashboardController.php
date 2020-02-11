<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models;

class dashboardController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    public function dashboard()
    {
        return view('dashboard');

    }
}
