<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function indexUser()
    {
        $usuarios=DB::table('users')->get();// select * from evento_adverso
        return view('indexUser.index',['users'=>$usuarios]); 
    }
<<<<<<< HEAD
    //
}
=======
}
>>>>>>> e043b7c (creacion de la primera vista)
