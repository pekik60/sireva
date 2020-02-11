<?php

namespace App\Http\Controllers\frontend\news;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models;

class news_listController extends Controller
{
	protected $model;

    public function __construct()
    {
        $this->model = new models();
    }   
    public function index(Request $req)
    {
    	$data = $this->model->d_news()->with('m_category_news')->paginate(8);
      return view('frontend.news.news_list',compact('data'));
    }
    function news_list_fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $data = $this->model->d_news()->with('m_category_news')->paginate(8);
      return view('frontend.event.event_list_result_render', compact('news'))->render();
     }
    }
}
