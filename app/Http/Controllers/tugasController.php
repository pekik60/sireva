<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models;

class tugasController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    public function tugas()
    {
        return view('tugas.tugas');
    }
}
