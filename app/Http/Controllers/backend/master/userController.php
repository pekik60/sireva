<?php

namespace App\Http\Controllers\backend\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\models;
class userController extends Controller
{
    protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 
    public function user()
    {
        $data = $this->model->m_mem()->get();
      return view('backend.master.user.user',compact('data'));
    }
    public function user_datatable()
    {
        $data = $this->model->m_mem()->get();
        $data = collect($data);
        return Datatables::of($data)
          ->addIndexColumn()
          ->make(true);
    }
    public function user_save(Request $req)
    {
        $id     = $this->model->m_mem()->max('cn_id')+1;
        $simpan = $this->model->m_mem()->create([
            'cn_id'=>$id,
            'cn_name'=>$req->cn_name,
            'cn_icon'=>$req->cn_icon,
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    public function user_update(Request $req)
    {
      $simpan = $this->model->m_mem()->where('cn_id',$req->cn_id)
      ->update([
            'cn_name'=>$req->cn_name,
            'cn_icon'=>$req->cn_icon,
      ]);
      return Response()->json(['status'=>'sukses']);
    }
    public function user_delete(Request $req)
    {
      $delete  = $this->model->m_mem()->where('cn_id',$req->id)->delete();
      return Response()->json(['status'=>'sukses']);
    }
}
