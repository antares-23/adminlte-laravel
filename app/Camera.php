<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    //
    protected $fillable=[
        'name',
        'description',
        'start_date',
        'end_date',
    ];
}
