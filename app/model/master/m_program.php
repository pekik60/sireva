<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_program extends model
{
    protected $table = 'm_program';
    protected $primaryKey = 'mp_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'mp_id',
        'mp_unit',
        'mp_department',
        'mp_name',
        'mp_yearly_budget',
    ];

    public function m_unit()
    {
        // Parameter pertama sebagai child, parameter kedua sebagai parent
        return $this->belongsTo('App\model\master\m_unit', 'mp_unit', 'mu_id');
    }

    public function m_department()
    {
        return $this->belongsTo('App\model\master\m_department', 'mp_department', 'md_id');
    }

    public function m_kegiatan()
    {
        return $this->hasMany('App\model\master\m_kegiatan', 'mk_program', 'mp_id');
    }

    public function m_output()
    {
        return $this->hasMany('App\model\master\m_output', 'mo_program', 'mp_id');
    }

    public function m_sub_output()
    {
        return $this->hasMany('App\model\master\m_sub_output', 'ms_program', 'mp_id');
    }

    public function m_komponen()
    {
        return $this->hasMany('App\model\master\m_komponen', 'mc_program', 'mp_id');
    }

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }

}
