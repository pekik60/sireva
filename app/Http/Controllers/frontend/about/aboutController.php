<?php

namespace App\Http\Controllers\frontend\about;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models;

class aboutController extends Controller
{
	protected $model;

    public function __construct()
    {
        $this->model = new models();
    }   
    public function index_about(Request $req)
    {
    	$data = $this->model->d_news()->with('m_category_news')->where('n_id',$req->id)->first();
        return view('frontend.about.about',compact('data'));
    }
}
