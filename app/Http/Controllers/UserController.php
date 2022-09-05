<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    public function show(){
        $user_data = User::find(1);
        $address_data = $user_data->address;
        return view('welcome', ['user'=>$user_data, 'address'=>$address_data]);
    }
}
