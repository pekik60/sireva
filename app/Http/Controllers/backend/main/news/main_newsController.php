<?php

namespace App\Http\Controllers\backend\main\news;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\models;
use Storage;
use Auth;
class main_newsController extends Controller
{
	protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 
    public function main_news()
    {
    	$data = $this->model->d_news()->get();
      
      return view('backend.main.news.main_news',compact('data'));
    }
    public function main_news_datatable()
    {
    	$data = $this->model->d_news()->with('m_mem')->get();
	    $data = collect($data);
     	return Datatables::of($data)
          ->addIndexColumn()
          ->toJson();
    }
    public function main_news_create()
    {
      $kategori = $this->model->m_category_news()->get();
      return view('backend.main.news.create_main_news',compact('kategori'));
    }
    public function main_news_save(Request $req)
    {
      // dd($req->all());
      $id   = $this->model->d_news()->max('n_id')+1;
      $file = $req->file('n_image');
      if ($file != null) {
          $photo = 'news/image_'.$id.'.jpg'/*$file->getClientOriginalExtension()*/;
          Storage::put($photo,file_get_contents($req->file('n_image')));
      }else{
          $photo = null;
      }
    	$simpan = $this->model->d_news()->create([
    		'n_id'=>$id,
        'n_title'=>$req->n_title,
        'n_content'=>$req->n_content,
        'n_category'=>$req->n_category,
        'n_image'=>$photo,
        'n_created_at'=>date('Y-m-d h:i:s'),
        'n_created_by'=>Auth::user()->m_id,
    	]);
    	return Response()->json(['status'=>'sukses']);
    }
    public function main_news_edit(Request $req)
    {
      $kategori = $this->model->m_category_news()->get();
      $data     = $this->model->d_news()->where('n_id',$req->id)->first();
      return view('backend.main.news.edit_main_news',compact('kategori','data'));
    }
    public function main_news_update(Request $req)
    {
      // dd($req->all());
      $cek_data = $this->model->d_news()->where('n_id',$req->n_id)->first();
      $file     = $req->file('n_image');
      // return $file;
      if ($file != null) {
          $photo = 'news/image_'.$cek_data->n_id.'.jpg';
          Storage::put($photo,file_get_contents($req->file('n_image')));
      }else{
          $photo = $cek_data->n_image;
      }
      $simpan = $this->model->d_news()->where('n_id',$req->n_id)->update([
        'n_title'=>$req->n_title,
        'n_content'=>$req->n_content,
        'n_category'=>$req->n_category,
        'n_image'=>$photo,
        'n_created_at'=>date('Y-m-d h:i:s'),
        'n_created_by'=>Auth::user()->m_id,
      ]);
      return Response()->json(['status'=>'sukses']);
    }
    public function main_news_delete(Request $req)
    {
      $delete  = $this->model->d_news()->where('n_id',$req->id)->delete();
      return Response()->json(['status'=>'sukses']);
    }
}
