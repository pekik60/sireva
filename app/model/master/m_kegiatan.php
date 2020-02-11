<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_kegiatan extends model
{
    protected $table = 'm_kegiatan';
    protected $primaryKey = 'mk_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'mk_id',
        'mk_unit',
        'mk_department',
        'mk_program',
        'mk_name',
        'mk_yearly_budget',
    ];

    public function m_department()
    {
        return $this->belongsTo('App\model\master\m_department', 'mk_department', 'md_id');
    }

    public function m_unit()
    {
        return $this->belongsTo('App\model\master\m_unit', 'mk_unit', 'mu_id');
    }

    public function m_program()
    {
        return $this->belongsTo('App\model\master\m_program', 'mk_program', 'mp_id');
    }

    public function m_output()
    {
        return $this->hasMany('App\model\master\m_output', 'mo_kegiatan', 'mk_id');
    }

    public function m_sub_output()
    {
        return $this->hasMany('App\model\master\m_sub_output', 'ms_kegiatan', 'mk_id');
    }

    public function m_kegiatan()
    {
        return $this->hasMany('App\model\master\m_kegiatan', 'mc_kegiatan', 'mk_id');
    }

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }

}
