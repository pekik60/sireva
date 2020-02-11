<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_department extends model
{
    protected $table = 'm_department';
    protected $primaryKey = 'md_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'md_id',
        'md_name',
    ];

    public function m_unit()
    {
        return $this->belongsTo('App\model\master\m_unit', 'mu_department', 'md_id');
    }

    public function m_program()
    {
        return $this->hasMany('App\model\master\m_program', 'mp_department', 'md_id');
    }

    public function m_kegiatan()
    {
        return $this->hasMany('App\model\master\m_kegiatan', 'mk_department', 'md_id');
    }

    public function m_output()
    {
        return $this->hasMany('App\model\master\m_output', 'mo_department', 'md_id');
    }

    public function m_sub_output()
    {
        return $this->hasMany('App\model\master\m_sub_output', 'ms_department', 'md_id');
    }

    public function m_komponen()
    {
        return $this->hasMany('App\model\master\m_komponen', 'mc_department', 'md_id');
    }

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }

}
