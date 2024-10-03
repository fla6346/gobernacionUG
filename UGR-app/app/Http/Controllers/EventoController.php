<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    public function index():View
    {
        $eventos=DB::table('evento_adverso')->get();// select * from evento_adverso
        return view('evento.index',['eventos'=>$eventos]); 
    }
    public function create():View
    {
        return view('evento.create');
    }
}
