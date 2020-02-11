<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models;

class riwayatController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    public function riwayat()
    {
        return view('riwayat.riwayat');
    }
}
