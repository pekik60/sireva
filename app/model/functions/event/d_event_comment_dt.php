<?php

namespace App\model\functions\event;

use Illuminate\Database\Eloquent\Model;

class d_event_comment_dt extends model
{
    protected $table = 'd_event_comment_dt';
    protected $primaryKey = 'dect_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dect_id',
                            'dect_dt',
                            'dect_comment_text',
                            'dect_comment_user',
                            'dect_created_at'
                         ];
    public function comment_user()
    {
        return $this->belongsTo('App\m_mem', 'dect_comment_user', 'm_id');
    }
    public function d_event_comment()
    {
        return $this->belongsTo('App\model\functions\event\d_event_comment', 'dect_id', 'dec_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}