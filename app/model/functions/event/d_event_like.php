<?php

namespace App\model\functions\event;

use Illuminate\Database\Eloquent\Model;

class d_event_like extends model
{
    protected $table = 'd_event_like';
    protected $primaryKey = 'del_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'del_id',
                            'del_event',
                            'del_like_user',
                            'del_creator',
                            'del_read',
                            'del_created_at'
                         ];
    public function creator()
    {
        return $this->belongsTo('App\m_mem', 'del_creator', 'm_id');
    }
    public function like_user()
    {
        return $this->belongsTo('App\m_mem', 'del_like_user', 'm_id');
    }
    public function d_event()
    {
        return $this->belongsTo('App\model\functions\event\d_event', 'del_event', 'e_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}