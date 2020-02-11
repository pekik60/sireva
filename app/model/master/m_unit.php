<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_unit extends model
{
    protected $table = 'm_unit';
    protected $primaryKey = 'mu_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'mu_id',
        'mu_name',
        'mu_department',
    ];

    public function m_department()
    {
        return $this->belongsTo('App\model\master\m_department', 'mu_department', 'md_id');
    }



    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }

}
