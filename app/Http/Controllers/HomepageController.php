<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models;
class HomepageController extends Controller
{

    protected $model;

    public function __construct()
    {
        $this->model = new models();
    }   

    public function index()
    {   
        $category_event = $this->model->m_category_event()->with('d_event')->get();
        $category_news  = $this->model->m_category_news()->get();
        $news           = $this->model->d_news()->with('m_category_news')->paginate(5);
        return view('index',compact('category_event','category_news','news'));
    }
    function news_render(Request $request)
    {
      if($request->ajax()){
          $news = $this->model->d_news()->with('m_category_news')->paginate(5);
          return view('news_result_render', compact('news'))->render();
      }
    }
}
