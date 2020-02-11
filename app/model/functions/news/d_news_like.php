<?php

namespace App\model\functions\news;

use Illuminate\Database\Eloquent\Model;

class d_news_like extends model
{
    protected $table = 'd_news_like';
    protected $primaryKey = 'dnl_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dnl_id',
                            'dnl_news',
                            'dnl_like_user',
                            'dnl_creator',
                            'dnl_read',
                            'dnl_created_at'
                          ];

    public function creator()
    {
        return $this->belongsTo('App\m_mem', 'dnl_creator', 'm_id');
    }
    public function user_comment()
    {
        return $this->belongsTo('App\m_mem', 'dnl_interest_user', 'm_id');
    }
    public function d_news()
    {
        return $this->belongsTo('App\model\functions\news\d_news', 'dnl_news', 'n_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    }


}