<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kit;


class Ctrl_Kit extends Controller
{
    //
    public function mostrar_todo(){
        $kits=kit::limit(100)->get();
        return $kits;

    }
    public function buscar_todo($cad){
        $kits=kit::where('item_fam','like','%'.$cad.'%')->get();
        return $kits;

    }

}
