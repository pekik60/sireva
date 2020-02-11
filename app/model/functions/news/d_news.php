<?php

namespace App\model\functions\news;

use Illuminate\Database\Eloquent\Model;

class d_news extends model
{
    protected $table = 'd_news';
    protected $primaryKey = 'n_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'n_id',
                            'n_title',
                            'n_image',
                            'n_category',
                            'n_content',
                            'n_views',
                            'n_created_at',
                            'n_updated_at',
                            'n_created_by',
                            'n_updated_by'
                          ];

    public function m_mem()
    {
        return $this->belongsTo('App\m_mem', 'n_created_by', 'm_id');
    }
    public function m_category_news()
    {
        return $this->belongsTo('App\model\master\m_category_news', 'n_category', 'cn_id');
    }
    public function d_news_like()
    {
        return $this->hasMany('App\model\functions\news\d_news_like', 'dnl_news', 'n_id');
    }
    public function d_news_comment()
    {
        return $this->hasMany('App\model\functions\news\d_news_comment', 'dnc_news', 'n_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    }


}