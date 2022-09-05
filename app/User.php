<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable=[

        'first_name', 'last_name',
        'phone_number',
        'email',
    ];

    public function address()
    {
        return $this->hasOne('App\Address');
    }
}
