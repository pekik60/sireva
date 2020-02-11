<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class m_mem extends Authenticatable
{
    protected $table = 'm_mem';
    protected $primaryKey = 'm_id';
    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'm_id',
                            'm_username',
                            'm_email',
                            'm_name',
                            'm_desc',
                            'm_city',
                            'm_address',
                            'm_phone',
                            'm_web',
                            'm_image',
                            'm_lastlogin',
                            'm_lastlogout',
                            'm_password',
                            'm_token',
                            'm_created_at',
                            'm_updated_at',
                          ];
                          
    public function d_news(){
      return $this->hasMany('App\model\functions\d_news', 'n_created_by', 'm_id');
    }    
    public function d_event(){
      return $this->hasMany('App\model\functions\d_event', 'e_created_by', 'm_id');
    }  
    public function d_event_comment(){
      return $this->hasMany('App\model\functions\d_event_comment', 'den_comment_user', 'm_id');
    }  
    public function d_event_comment_dt(){
      return $this->hasMany('App\model\functions\d_event_comment_dt', 'dent_comment_user', 'm_id');
    }                       
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}