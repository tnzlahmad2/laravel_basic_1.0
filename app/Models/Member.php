<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps = false;

    // accessor in laravel;
// function getEmailAttribute($value)
// {
//     return ucFirst($value);
// }
//     function getAddressAttribute($value)
//    {
//     return $value." , pakistan';
// }
// function getAddressAttribute($value)
// {
//     return $value . ', Pakistan';
// }

    // public function setAddressAttribute($value)
    // {
    //     return $value . ', punjab';
    // }
    public function relation()
    {
        // one to one relation
        // return $this->hasOne('App\Models\Store');

        // one to many relation
        return $this->hasMany('App\Models\Store');
    }
}