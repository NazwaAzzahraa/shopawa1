<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function register(){
        return view('register_admin');
    }
    function create(Request $req){
        $validate = $this->validate($req,[
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required_with:confirm_password|min:5|same:confirm_password',
        ]);
        $validate['password']=bcrypt($req->password);
        User::create($validate);
        return redirect ('login/admin');
    }
}
