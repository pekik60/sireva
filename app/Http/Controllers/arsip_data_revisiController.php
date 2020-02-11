<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models;

class arsip_data_revisiController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    public function arsip_data_revisi()
    {
        return view('arsip_data_revisi.arsip_data_revisi');
    }
}
