<?php

namespace App\model\functions\event;

use Illuminate\Database\Eloquent\Model;

class d_event_interest extends model
{
    protected $table = 'd_event_interest';
    protected $primaryKey = 'dei_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dei_id',
                            'dei_event',
                            'dei_interest_user',
                            'dei_creator',
                            'dei_read',
                            'dei_created_at'
                         ];
    public function creator()
    {
        return $this->belongsTo('App\m_mem', 'den_creator', 'm_id');
    }
    public function interest_user()
    {
        return $this->belongsTo('App\m_mem', 'dei_interest_user', 'm_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}