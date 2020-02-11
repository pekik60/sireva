<?php

namespace App\Http\Controllers\backend\master\category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\models;
class category_newsController extends Controller
{
    protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 
    public function category_news()
    {
        $data = $this->model->m_category_news()->get();
      return view('backend.master.category.category_news',compact('data'));
    }
    public function category_news_datatable()
    {
        $data = $this->model->m_category_news()->get();
        $data = collect($data);
        return Datatables::of($data)
          ->addIndexColumn()
          ->make(true);
    }
    public function category_news_save(Request $req)
    {
        $id     = $this->model->m_category_news()->max('cn_id')+1;
        $simpan = $this->model->m_category_news()->create([
            'cn_id'=>$id,
            'cn_name'=>$req->cn_name,
            'cn_icon'=>$req->cn_icon,
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    public function category_news_update(Request $req)
    {
      $simpan = $this->model->m_category_news()->where('cn_id',$req->cn_id)
      ->update([
            'cn_name'=>$req->cn_name,
            'cn_icon'=>$req->cn_icon,
      ]);
      return Response()->json(['status'=>'sukses']);
    }
    public function category_news_delete(Request $req)
    {
      $delete  = $this->model->m_category_news()->where('cn_id',$req->id)->delete();
      return Response()->json(['status'=>'sukses']);
    }
}
