<?php

namespace App\Http\Controllers\backend\main\event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\models;
use Auth;
use Storage;
class main_eventController extends Controller
{
	protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 
    public function main_event()
    {
    	$data = $this->model->d_event()->where('e_created_by',Auth::user()->m_id)->get();
      return view('backend.main.event.main_event',compact('data'));
    }
    public function main_event_datatable()
    {
    	$data = $this->model->d_event()->get();
	    $data = collect($data);
     	return Datatables::of($data)
          ->addIndexColumn()
          ->toJson();
    }
    public function main_event_create()
    {
      $kategori = $this->model->m_category_event()->get();
      return view('backend.main.event.create_main_event',compact('kategori'));
    }
    public function main_event_save(Request $req)
    {
    	$id   = $this->model->d_event()->max('e_id')+1;
      $file = $req->file('e_poster');
      if ($file != null) {
          $photo = 'event/image_'.$id.'.jpg';
          Storage::put($photo,file_get_contents($req->file('e_poster')));
      }else{
          $photo = null;
      }
    	$simpan = $this->model->d_event()->create([
            'e_id'            =>$id ,
            'e_poster'        =>$photo ,
            'e_title'         =>$req->e_title ,
            'e_type'          =>$req->e_type,
            'e_category'      =>$req->e_category,
            'e_desc'          =>$req->n_content,
            'e_start_date'    =>date('Y-m-d',strtotime($req->e_start_date)),
            'e_end_date'      =>date('Y-m-d',strtotime($req->e_end_date)),
            'e_start_time'    =>$req->e_start_time,
            'e_end_time'      =>$req->e_end_time,
            'e_location'      =>$req->e_location,
            'e_location_desc' =>$req->e_location_desc,
            'e_web'           =>$req->e_web,
            'e_email'         =>$req->e_email,
            'e_phone'         =>$req->e_phone,
            'e_created_by'    =>Auth::user()->m_id,
    	]);
    	return Response()->json(['status'=>'sukses']);
    }
    public function main_event_edit(Request $req)
    {
      $kategori = $this->model->m_category_event()->get();
      $data = $this->model->d_event()->where('e_id',$req->id)->first();
      return view('backend.main.event.edit_main_event',compact('kategori','data'));
    }
    public function main_event_update(Request $req)
    {
      // dd($req->all());
      $cek_data = $this->model->d_event()->where('e_id',$req->e_id)->first();
      $file = $req->file('e_poster');
      if ($file != null) {
          $photo = 'event/image_'.$req->e_id.'.jpg';
          Storage::put($photo,file_get_contents($req->file('e_poster')));
      }else{
          $photo = $cek_data->e_poster;
      }
      $simpan = $this->model->d_event()->where('e_id',$req->e_id)->update([
            'e_poster'        =>$photo ,
            'e_title'         =>$req->e_title ,
            'e_type'          =>$req->e_type,
            'e_category'      =>$req->e_category,
            'e_desc'          =>$req->n_content,
            'e_start_date'    =>date('Y-m-d',strtotime($req->e_start_date)),
            'e_end_date'      =>date('Y-m-d',strtotime($req->e_end_date)),
            'e_start_time'    =>$req->e_start_time,
            'e_end_time'      =>$req->e_end_time,
            'e_location'      =>$req->e_location,
            'e_location_desc' =>$req->e_location_desc,
            'e_web'           =>$req->e_web,
            'e_email'         =>$req->e_email,
            'e_phone'         =>$req->e_phone,
            'e_updated_by'    =>Auth::user()->m_id,
      ]);
      return Response()->json(['status'=>'sukses']);
    }
    public function main_event_delete(Request $req)
    {
      $delete             = $this->model->d_event()->where('ce_id',$req->id)->delete();
      $delete_comment     = $this->model->d_event_comment()->where('dec_id',$req->id)->delete();
      $delete_comment_dt  = $this->model->d_event_comment_dt()->where('dect_id',$req->id)->delete();
      $delete_like        = $this->model->d_event_like()->where('del_id',$req->id)->delete();
      $delete_interest    = $this->model->d_event_interest()->where('dei_id',$req->id)->delete();
      return Response()->json(['status'=>'sukses']);
    }
}
