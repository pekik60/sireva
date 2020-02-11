<?php

namespace App\model\functions\news;

use Illuminate\Database\Eloquent\Model;

class d_news_comment_dt extends model
{
    protected $table = 'd_news_comment_dt';
    protected $primaryKey = 'dnct_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dnct_id',
                            'dnct_comment_text',
                            'dnct_comment_user',
                            'dnct_creator',
                            'dnct_read',
                            'dnct_created_at'
                          ];

    public function creator()
    {
        return $this->belongsTo('App\m_mem', 'dnct_creator', 'm_id');
    }
    public function user_comment()
    {
        return $this->belongsTo('App\m_mem', 'dnct_comment_user', 'm_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    }


}