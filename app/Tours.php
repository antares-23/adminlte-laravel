<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

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


    /*public function tour(){
        return $this->belongsTo(User::class );
    }*/
}
