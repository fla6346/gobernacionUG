<?php

namespace App\Http\Controllers;

use App\Models\EventoAdverso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

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
