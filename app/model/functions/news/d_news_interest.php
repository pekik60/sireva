<?php

namespace App\model\functions\news;

use Illuminate\Database\Eloquent\Model;

class d_news_interest extends model
{
    protected $table = 'd_news_interest';
    protected $primaryKey = 'dni_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dni_id',
                            'dni_news',
                            'dni_interest_user',
                            'dni_creator',
                            'dni_read',
                            'dni_created_at'
                          ];

    public function creator()
    {
        return $this->belongsTo('App\m_mem', 'dni_creator', 'm_id');
    }
    public function user_comment()
    {
        return $this->belongsTo('App\m_mem', 'dni_interest_user', 'm_id');
    }
    public function d_news()
    {
        return $this->belongsTo('App\model\functions\news\d_news', 'dni_news', 'n_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    }


}