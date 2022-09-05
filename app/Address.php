<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Address extends Model
{

    protected $fillable=[

        'user_id', 'street_address', 'street_address_line2',
        'city', 'state_province', 'postal_zip_code',
    ];
    protected $casts=[
    'postal_zip_code' => 'integer',
        'user_id' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');

    }
}
