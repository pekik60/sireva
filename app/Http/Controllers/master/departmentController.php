<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\models;
class departmentController extends Controller
{
    protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 
    public function department()
    {
      $data = $this->model->m_department()->get();
      return view('master.department.department',compact('data'));
    }
    public function department_datatable()
    {
        $data = $this->model->m_department()->get();
        $data = collect($data);
        return Datatables::of($data)
          ->addIndexColumn()
          ->make(true);
    }
    public function department_save(Request $req)
    {
        $id     = $this->model->m_department()->max('md_id')+1;
        $simpan = $this->model->m_department()->create([
            'md_id'=>$id,
            'md_name'=>$req->md_name,
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    public function department_update(Request $req)
    {
      $simpan = $this->model->m_department()->where('md_id',$req->md_id)
      ->update([
            'md_name'=>$req->md_name,
      ]);
      return Response()->json(['status'=>'sukses']);
    }
    public function department_delete(Request $req)
    {
      $delete  = $this->model->m_department()->where('md_id',$req->id)->delete();
      return Response()->json(['status'=>'sukses']);
    }
}
