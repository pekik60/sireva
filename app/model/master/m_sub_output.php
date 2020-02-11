<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_sub_output extends model
{
    protected $table = 'm_sub_output';
    protected $primaryKey = 'ms_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'ms_id',
        'ms_unit',
        'ms_department',
        'ms_program',
        'ms_kegiatan',
        'ms_output',
        'ms_name',
        'ms_yearly_budget',
    ];

    public function m_department()
    {
        return $this->belongsTo('App\model\master\m_department', 'ms_department', 'md_id');
    }

    public function m_unit()
    {
        return $this->belongsTo('App\model\master\m_unit', 'ms_unit', 'mu_id');
    }

    public function m_program()
    {
        return $this->belongsTo('App\model\master\m_program', 'ms_program', 'mp_id');
    }

    public function m_kegiatan()
    {
        return $this->belongsTo('App\model\master\m_kegiatan', 'ms_kegiatan', 'mk_id');
    }

    public function m_output()
    {
        return $this->belongsTo('App\model\master\m_output', 'ms_output', 'mo_id');
    }

    public function m_komponen()
    {
        return $this->hasMany('App\model\master\m_komponen', 'mc_sub_output', 'ms_id');
    }

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }

}
