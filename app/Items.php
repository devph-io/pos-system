<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = [
       'id','name', 'amount', 'stocks_available',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

}
