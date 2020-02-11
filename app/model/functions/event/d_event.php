<?php

namespace App\model\functions\event;

use Illuminate\Database\Eloquent\Model;

class d_event extends model
{
    protected $table = 'd_event';
    protected $primaryKey = 'e_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'e_id'  ,
                            'e_title' ,
                            'e_poster' ,
                            'e_type' ,
                            'e_category' ,
                            'e_desc' ,
                            'e_start_date' ,
                            'e_end_date' ,
                            'e_start_time' ,
                            'e_end_time' ,
                            'e_location' ,
                            'e_location_desc' ,
                            'e_web',
                            'e_email',
                            'e_phone',
                            'e_created_by' ,
                            'e_created_at' ,
                            'e_updated_by' ,
                            'e_updated_at' ,
                          ];
    public function m_mem()
    {
        return $this->belongsTo('App\m_mem', 'e_created_by', 'm_id');
    }
    public function m_category_event()
    {
        return $this->belongsTo('App\model\master\m_category_event', 'e_category', 'ce_id');
    }
    public function d_event_like()
    {
        return $this->hasMany('App\model\functions\event\d_event_like', 'del_event', 'e_id');
    }
    public function d_event_comment()
    {
        return $this->hasMany('App\model\functions\event\d_event_comment', 'dec_event', 'e_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}