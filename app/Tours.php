<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\User;

class Tours extends Model
{
    //
    protected $fillable=[
        'name',
        'subdomain_id',
        'date_start',
        'total_size'
    ];


    public function user(){
        return $this->belongsTo(User::class );
    }
}
