<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subdomain extends Model
{
    //
    protected $fillable=[
        'name',
        'url',
        'user_id',
        'date_start',
        'total_size'
    ];


    public function user(){
        return $this->belongsTo(User::class );
    }
}

