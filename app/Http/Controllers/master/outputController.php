<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use App\models;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class outputController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    public function output()
    {
        $data = $this->model->m_output()->get();
        $unit = $this->model->m_unit()->get();
        $department = $this->model->m_department()->get();
        $program = $this->model->m_program()->get();
        $kegiatan = $this->model->m_kegiatan()->get();
        return view('master.output.output', compact('data', 'unit', 'department', 'program', 'kegiatan'));
    }
    public function output_datatable()
    {
        $data = $this->model->m_output()->with('m_unit')->with('m_department')->with('m_program')->with('m_kegiatan')->get();
        $data = collect($data);
        return Datatables::of($data)
            ->addIndexColumn()
            ->make(true);
    }
    public function output_save(Request $req)
    {
        $id = $this->model->m_output()->max('mo_id') + 1;
        $simpan = $this->model->m_output()->create([
            'mo_id' => $id,
            'mo_unit' => $req->mo_unit,
            'mo_department' => $req->mo_department,
            'mo_program' => $req->mo_program,
            'mo_kegiatan' => $req->mo_kegiatan,
            'mo_name' => $req->mo_name,
        ]);
        return Response()->json(['status' => 'sukses']);
    }
    public function output_update(Request $req)
    {
        $simpan = $this->model->m_output()->where('mo_id', $req->mo_id)
            ->update([
                'mo_name' => $req->mo_name,
            ]);
        return Response()->json(['status' => 'sukses']);
    }
    public function output_delete(Request $req)
    {
        $delete = $this->model->m_output()->where('mo_id', $req->id)->delete();
        return Response()->json(['status' => 'sukses']);
    }
}
