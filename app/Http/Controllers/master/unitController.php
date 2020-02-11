<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\models;
class unitController extends Controller
{
    protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 
    public function unit()
    {
      $data = $this->model->m_unit()->get();
      $department = $this->model->m_department()->get();
      return view('master.unit.unit',compact('data','department'));
    }
    public function unit_datatable()
    {
        $data = $this->model->m_unit()->with('m_department')->get();
        $data = collect($data);
        return Datatables::of($data)
          ->addIndexColumn()
          ->make(true);
    }
    public function unit_save(Request $req)
    {
        $id     = $this->model->m_unit()->max('mu_id')+1;
        $simpan = $this->model->m_unit()->create([
            'mu_id'=>$id,
            'mu_name'=>$req->mu_name,
            'mu_department'=>$req->mu_department,
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    public function unit_update(Request $req)
    {
      $simpan = $this->model->m_unit()->where('mu_id',$req->mu_id)
      ->update([
            'mu_name'=>$req->mu_name,
            'mu_department'=>$req->mu_department,
      ]);
      return Response()->json(['status'=>'sukses']);
    }
    public function unit_delete(Request $req)
    {
      $delete  = $this->model->m_unit()->where('mu_id',$req->id)->delete();
      return Response()->json(['status'=>'sukses']);
    }
}
