<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use App\models;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class komponenController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    public function komponen()
    {
        $data = $this->model->m_komponen()->get();
        $unit = $this->model->m_unit()->get();
        $department = $this->model->m_department()->get();
        $program = $this->model->m_program()->get();
        $kegiatan = $this->model->m_kegiatan()->get();
        $output = $this->model->m_output()->get();
        $sub_output = $this->model->m_sub_output()->get();
        return view('master.komponen.komponen', compact('data', 'unit', 'department', 'program', 'kegiatan', 'output', 'sub_output'));
    }
    public function komponen_datatable()
    {
        $data = $this->model->m_komponen()->with('m_unit')->with('m_department')->with('m_program')->with('m_kegiatan')->with('m_output')->with('m_sub_output')->get();
        $data = collect($data);
        return Datatables::of($data)
            ->addIndexColumn()
            ->make(true);
    }
    public function komponen_save(Request $req)
    {
        $id = $this->model->m_komponen()->max('mc_id') + 1;
        $simpan = $this->model->m_komponen()->create([
            'mc_id' => $id,
            'mc_unit' => $req->mc_unit,
            'mc_department' => $req->mc_department,
            'mc_program' => $req->mc_program,
            'mc_kegiatan' => $req->mc_kegiatan,
            'mc_output' => $req->mc_output,
            'mc_sub_output' => $req->mc_sub_output,
            'mc_name' => $req->mc_name,
        ]);
        return Response()->json(['status' => 'sukses']);
    }
    public function komponen_update(Request $req)
    {
        $simpan = $this->model->m_komponen()->where('mc_id', $req->mc_id)
            ->update([
                'mc_name' => $req->mc_name,
            ]);
        return Response()->json(['status' => 'sukses']);
    }
    public function komponen_delete(Request $req)
    {
        $delete = $this->model->m_komponen()->where('mc_id', $req->id)->delete();
        return Response()->json(['status' => 'sukses']);
    }
}
