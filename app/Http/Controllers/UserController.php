<?php

namespace gymuss\Http\Controllers;

use Illuminate\Http\Request;
use gymuss\User;
class UserController extends Controller
{
    public function show($user){
        $usr = User::find($user);
    }
}
