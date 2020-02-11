<?php

namespace App\Http\Controllers\frontend\event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models;

class event_listController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new models();
    }   
    public function index(Request $req)
    {
    	$data      = $this->model->d_event()->with('m_mem','m_category_event')->paginate(8);
      $category  = $this->model->m_category_event()->get();
      return view('frontend.event.event_list',compact('data','category'));
    }
    function event_list_fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $data = $this->model->d_event()->with('m_mem','m_category_event')->paginate(8);
      return view('frontend.event.event_list_result_render', compact('data'))->render();
     }
    }
    public function event_list_search(Request $req)
    {
      if ($req->kategori != null) {
          $kategori = 'e_category = '.$req->kategori.'';
      }else{
          $kategori = '';
      }
      if ($req->tgl_awal != null) {
          $tgl_awal = 'and e_start_date = '.$req->tgl_awal.'';
      }else{
          $tgl_awal = '';
      }
      if ($req->tgl_akir != null) {
          $tgl_akir = 'and e_end_date = '.$req->tgl_akir.'';
      }else{
          $tgl_akir = '';
      }
      $data = $this->model->d_event()->with('m_mem','m_category_event')->whereRaw($kategori.$tgl_awal.$tgl_akir)->paginate(8);
      return view('frontend.event.event_list_result_render', compact('data'))->render();
    }
}
