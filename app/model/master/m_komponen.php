<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_komponen extends model
{
    protected $table = 'm_komponen';
    protected $primaryKey = 'mc_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'mc_id',
        'mc_unit',
        'mc_department',
        'mc_program',
        'mc_kegiatan',
        'mc_output',
        'mc_sub_output',
        'mc_name',
        'mc_yearly_budget',
    ];

    public function m_unit()
    {
        return $this->belongsTo('App\model\master\m_unit', 'mc_unit', 'mu_id');
    }

    public function m_department()
    {
        return $this->belongsTo('App\model\master\m_department', 'mc_department', 'md_id');
    }

    public function m_program()
    {
        return $this->belongsTo('App\model\master\m_program', 'mc_program', 'mp_id');
    }

    public function m_kegiatan()
    {
        return $this->belongsTo('App\model\master\m_kegiatan', 'mc_kegiatan', 'mk_id');
    }

    public function m_output()
    {
        return $this->belongsTo('App\model\master\m_output', 'mc_output', 'mo_id');
    }

    public function m_sub_output()
    {
        return $this->belongsTo('App\model\master\m_sub_output', 'mc_sub_output', 'ms_id');
    }

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }

}
