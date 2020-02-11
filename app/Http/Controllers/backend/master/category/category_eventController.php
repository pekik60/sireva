<?php

namespace App\Http\Controllers\backend\master\category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\models;
class category_eventController extends Controller
{
	protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 
    public function category_event()
    {
    	$data = $this->model->m_category_event()->get();
      return view('backend.master.category.category_event',compact('data'));
    }
    public function category_event_datatable()
    {
    	$data = $this->model->m_category_event()->get();
	    $data = collect($data);
     	return Datatables::of($data)
          ->addIndexColumn()
          ->toJson();
    }
    public function category_event_save(Request $req)
    {
    	$id 	= $this->model->m_category_event()->max('ce_id')+1;
    	$simpan = $this->model->m_category_event()->create([
    		'ce_id'=>$id,
            'ce_name'=>$req->ce_name,
            'ce_icon'=>$req->ce_icon,
            'ce_href'=>$req->ce_href,
    	]);
    	return Response()->json(['status'=>'sukses']);
    }
    public function category_event_update(Request $req)
    {
      $simpan = $this->model->m_category_event()->where('ce_id',$req->ce_id)
      ->update([
            'ce_name'=>$req->ce_name,
            'ce_icon'=>$req->ce_icon,
            'ce_href'=>$req->ce_href,
      ]);
      return Response()->json(['status'=>'sukses']);
    }
    public function category_event_delete(Request $req)
    {
      $delete  = $this->model->m_category_event()->where('ce_id',$req->id)->delete();
      return Response()->json(['status'=>'sukses']);
    }
}
