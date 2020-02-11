<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models;

class detilController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    public function detil()
    {
        // $data = $this->model->m_category_news()->get();
        // return view('backend.master.category.category_news', compact('data'));
        return view('detil');

    }
}
