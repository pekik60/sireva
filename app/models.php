<?php

namespace App;

use App\model\master\m_department;
use App\model\master\m_kegiatan;
use App\model\master\m_komponen;
use App\model\master\m_output;
use App\model\master\m_program;
use App\model\master\m_sub_output;
use App\model\master\m_unit;
use App\m_mem;

// master
use Illuminate\Database\Eloquent\Model;

class models extends model
{
    public function m_mem()
    {
        $m_mem = new m_mem();

        return $m_mem;
    }
    public function m_department()
    {
        $m_department = new m_department();

        return $m_department;
    }
    public function m_unit()
    {
        $m_unit = new m_unit();

        return $m_unit;
    }

    public function m_program()
    {
        $m_program = new m_program();

        return $m_program;
    }

    public function m_kegiatan()
    {
        $m_kegiatan = new m_kegiatan();
        return $m_kegiatan;
    }

    public function m_output()
    {
        $m_output = new m_output();
        return $m_output;
    }

    public function m_sub_output()
    {
        $m_sub_output = new m_sub_output();
        return $m_sub_output;
    }

    public function m_komponen()
    {
        $m_komponen = new m_komponen();
        return $m_komponen;
    }

}
