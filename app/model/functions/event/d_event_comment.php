<?php

namespace App\model\functions\event;

use Illuminate\Database\Eloquent\Model;

class d_event_comment extends model
{
    protected $table = 'd_event_comment';
    protected $primaryKey = 'dec_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dec_id',
                            'dec_event',
                            'dec_comment_text',
                            'dec_comment_user',
                            'dec_creator',
                            'dec_read',
                            'dec_created_at'
                         ];
    public function comment_user()
    {
        return $this->belongsTo('App\m_mem', 'dec_comment_user', 'm_id');
    }
    public function creator()
    {
        return $this->belongsTo('App\m_mem', 'dec_creator', 'm_id');
    }
    public function d_event_comment_dt()
    {
        return $this->hasMany('App\model\functions\event\d_event_comment_dt', 'dect_id', 'dec_id');
    }
    public function d_event()
    {
        return $this->belongsTo('App\model\functions\event\d_event', 'dei_event', 'e_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}