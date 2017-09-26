<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    //
    protected $fillable=[
        'name',
        'url',
        'user_id',
        'date_start',
        'total_size'
    ];


}
