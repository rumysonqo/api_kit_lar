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

    public function programas(){
        $kits=kit::select('cod_programa','programa')->distinct()->orderBy('cod_programa')->get('cod_programa');
        return $kits;
    }

    public function kit_por_programa($prg){
        $kits=kit::where('cod_programa','=',$prg)->get();
        return $kits;
    }

    public function kit_por_programa_cadena($prg,$cad){
        $kits=kit::where('cod_programa','=',$prg)->where('item_fam','like','%'.$cad.'%')->get();
        return $kits;
    }

    public function prog_metas($prg){
        $kits=kit::select('cod_meta','meta')->distinct()->where('cod_programa','=',$prg)->orderBy('cod_meta')->get('cod_meta');
        return $kits;
    }

    public function kit_por_programa_meta($prg,$met){
        $kits=kit::where('cod_programa','=',$prg)->where('cod_meta','=',$met)->get();
        return $kits;
    }





}
