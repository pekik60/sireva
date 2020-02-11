<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use App\models;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class programController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    public function program()
    {
        $data = $this->model->m_program()->get();
        $department = $this->model->m_department()->get();
        $unit = $this->model->m_unit()->get();
        return view('master.program.program', compact('data', 'department', 'unit'));
    }
    public function program_datatable()
    {
        $data = $this->model->m_program()->with('m_unit')->with('m_department')->get();
        $data = collect($data);
        return Datatables::of($data)
            ->addIndexColumn()
            ->make(true);
    }
    public function program_save(Request $req)
    {
        $id = $this->model->m_program()->max('mp_id') + 1;
        $simpan = $this->model->m_program()->create([
            'mp_id' => $id,
            'mp_unit' => $req->mp_unit,
            'mp_department' => $req->mp_department,
            'mp_name' => $req->mp_name,
        ]);
        return Response()->json(['status' => 'sukses']);
    }
    public function program_update(Request $req)
    {
        $simpan = $this->model->m_program()->where('mp_id', $req->mp_id)
            ->update([
                'mp_name' => $req->mp_name,
            ]);
        return Response()->json(['status' => 'sukses']);
    }
    public function program_delete(Request $req)
    {
        $delete = $this->model->m_program()->where('mp_id', $req->id)->delete();
        return Response()->json(['status' => 'sukses']);
    }
}
