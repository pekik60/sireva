<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_output extends model
{
    protected $table = 'm_output';
    protected $primaryKey = 'mo_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'mo_id',
        'mo_unit',
        'mo_department',
        'mo_program',
        'mo_kegiatan',
        'mo_name',
        'mo_yearly_budget',
    ];

    public function m_department()
    {
        return $this->belongsTo('App\model\master\m_department', 'mo_department', 'md_id');
    }

    public function m_unit()
    {
        return $this->belongsTo('App\model\master\m_unit', 'mo_unit', 'mu_id');
    }

    public function m_program()
    {
        return $this->belongsTo('App\model\master\m_program', 'mo_program', 'mp_id');
    }

    public function m_kegiatan()
    {
        return $this->belongsTo('App\model\master\m_kegiatan', 'mo_kegiatan', 'mk_id');
    }

    public function m_sub_output()
    {
        return $this->hasMany('App\model\master\m_sub_output', 'ms_output', 'mo_id');
    }

    public function m_komponen()
    {
        return $this->hasMany('App\model\master\m_komponen', 'mc_output', 'mo_id');
    }

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }

}
