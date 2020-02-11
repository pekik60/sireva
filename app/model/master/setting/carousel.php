<?php

namespace App\model\master\setting;

use Illuminate\Database\Eloquent\Model;

class carousel extends model
{
    protected $table = 'carousel';
    protected $primaryKey = 'msc_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'msc_id',
                            'msc_title',
                            'msc_image',
                            'msc_created_at',
                            'msc_update_at',
                            'msc_created_by',
                            'msc_update_by',
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}