<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use db;

class principalController extends Controller
{
    public function inicio(){

        $consulta = \DB::table('blog')
                 ->select('id','titulo','img')
                 ->get();
        
        $clasificaciones = \DB::table('clasificaciones')
                 ->select('id','nombre','descripcion','orden','imagen','slug')
                 ->orderBy('orden','asc')
                 ->get();
         
        return view('slider')->with(['resultado' => $consulta])->with(['clasificaciones'=>$clasificaciones]);
    }
}
