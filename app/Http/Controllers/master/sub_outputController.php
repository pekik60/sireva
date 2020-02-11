<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use App\models;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class sub_outputController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    public function sub_output()
    {
        $data = $this->model->m_sub_output()->get();
        $unit = $this->model->m_unit()->get();
        $department = $this->model->m_department()->get();
        $program = $this->model->m_program()->get();
        $kegiatan = $this->model->m_kegiatan()->get();
        $output = $this->model->m_output()->get();
        return view('master.sub_output.sub_output', compact('data', 'unit', 'department', 'program', 'kegiatan', 'output'));
    }
    public function sub_output_datatable()
    {
        $data = $this->model->m_sub_output()->with('m_unit')->with('m_department')->with('m_program')->with('m_kegiatan')->with('m_output')->get();
        $data = collect($data);
        return Datatables::of($data)
            ->addIndexColumn()
            ->make(true);
    }
    public function sub_output_save(Request $req)
    {
        $id = $this->model->m_sub_output()->max('ms_id') + 1;
        $simpan = $this->model->m_sub_output()->create([
            'ms_id' => $id,
            'ms_unit' => $req->ms_unit,
            'ms_department' => $req->ms_department,
            'ms_program' => $req->ms_program,
            'ms_kegiatan' => $req->ms_kegiatan,
            'ms_output' => $req->ms_output,
            'ms_name' => $req->ms_name,
        ]);
        return Response()->json(['status' => 'sukses']);
    }
    public function sub_output_update(Request $req)
    {
        $simpan = $this->model->m_sub_output()->where('ms_id', $req->ms_id)
            ->update([
                'ms_name' => $req->ms_name,
            ]);
        return Response()->json(['status' => 'sukses']);
    }
    public function sub_output_delete(Request $req)
    {
        $delete = $this->model->m_sub_output()->where('ms_id', $req->id)->delete();
        return Response()->json(['status' => 'sukses']);
    }
}
