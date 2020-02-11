<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use App\models;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class kegiatanController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    public function kegiatan()
    {
        $data = $this->model->m_kegiatan()->get();
        $department = $this->model->m_department()->get();
        $unit = $this->model->m_unit()->get();
        $program = $this->model->m_program()->get();
        return view('master.kegiatan.kegiatan', compact('data', 'unit', 'department', 'program'));
    }
    public function kegiatan_datatable()
    {
        $data = $this->model->m_kegiatan()->with('m_unit')->with('m_department')->with('m_program')->get();
        $data = collect($data);
        return Datatables::of($data)
            ->addIndexColumn()
            ->make(true);
    }
    public function kegiatan_save(Request $req)
    {
        $id = $this->model->m_kegiatan()->max('mk_id') + 1;
        $simpan = $this->model->m_kegiatan()->create([
            'mk_id' => $id,
            'mk_unit' => $req->mk_unit,
            'mk_department' => $req->mk_department,
            'mk_program' => $req->mk_program,
            'mk_name' => $req->mk_name,
        ]);
        return Response()->json(['status' => 'sukses']);
    }
    public function kegiatan_update(Request $req)
    {
        $simpan = $this->model->m_kegiatan()->where('mk_id', $req->mk_id)
            ->update([
                'mk_name' => $req->mk_name,
            ]);
        return Response()->json(['status' => 'sukses']);
    }
    public function kegiatan_delete(Request $req)
    {
        $delete = $this->model->m_kegiatan()->where('mk_id', $req->id)->delete();
        return Response()->json(['status' => 'sukses']);
    }
}
