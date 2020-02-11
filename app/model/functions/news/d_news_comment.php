<?php

namespace App\model\functions\news;

use Illuminate\Database\Eloquent\Model;

class d_news_comment extends model
{
    protected $table = 'd_news_comment';
    protected $primaryKey = 'dnc_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dnc_id',
                            'dnc_news',
                            'dnc_comment_text',
                            'dnc_comment_user',
                            'dnc_creator',
                            'dnc_read',
                            'dnc_created_at'
                          ];

    public function creator()
    {
        return $this->belongsTo('App\m_mem', 'dnc_creator', 'm_id');
    }
    public function user_comment()
    {
        return $this->belongsTo('App\m_mem', 'dnc_comment_user', 'm_id');
    }
    public function d_news()
    {
        return $this->belongsTo('App\model\functions\news\d_news', 'dnc_news', 'n_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    }


}