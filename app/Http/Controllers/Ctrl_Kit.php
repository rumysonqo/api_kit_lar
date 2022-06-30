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

    public function kit_por_programa_meta_cadena($prg,$met,$cad){
        $kits=kit::where('cod_programa','=',$prg)->where('cod_meta','=',$met)->where('item_fam','like','%'.$cad.'%')->get();
        return $kits;
    }

    public function metas(){
        $kits=kit::select('cod_meta','meta')->distinct()->orderBy('cod_meta')->get('cod_meta');
        return $kits;
    }

    public function tareas($met){
        $kits=kit::select('cod_subfin','sub_finalidad')->distinct()->where('cod_meta','=',$met)->orderBy('cod_subfin')->get('cod_subfin');
        return $kits;
    }

    public function kit_por_meta($met){
        $kits=kit::where('cod_meta','=',$met)->get();
        return $kits;
    }

    public function kit_por_meta_cadena($met,$cad){
        $kits=kit::where('cod_meta','=',$met)->where('item_fam','like','%'.$cad.'%')->get();
        return $kits;
    }

    public function kit_por_meta_tarea($met,$tar){
        $kits=kit::where('cod_meta','=',$met)->where('cod_subfin','=',$tar)->get();
        return $kits;
    }

    public function kit_por_meta_tarea_cadena($met,$tar,$cad){
        $kits=kit::where('cod_meta','=',$met)->where('cod_subfin','=',$tar)->where('item_fam','like','%'.$cad.'%')->get();
        return $kits;
    }

    public function clasificador(){
        $kits=kit::select('cod_clasificador','clasificador')->distinct()->orderBy('cod_clasificador')->get('cod_programa');
        return $kits;
    }

    public function kit_por_clasificador($clf){
        $kits=kit::where('cod_clasificador','=',$clf)->get();
        return $kits;
    }

    public function kit_por_clasificador_cadena($clf,$cad){
        $kits=kit::where('cod_clasificador','=',$clf)->where('item_fam','like','%'.$cad.'%')->get();
        return $kits;
    }

    public function metas_clasificador($met){
        $kits=kit::select('cod_clasificador','clasificador')->distinct()->where('cod_meta','=',$met)->orderBy('cod_clasificador')->get('cod_clasificador');
        return $kits;
    }

    public function kit_por_meta_clasificador($met,$clf){
        $kits=kit::where('cod_meta','=',$met)->where('cod_clasificador','=',$clf)->get();
        return $kits;
    }

    public function kit_por_meta_clasificador_cadena($met,$clf,$cad){
        $kits=kit::where('cod_meta','=',$met)->where('cod_clasificador','=',$clf)->where('item_fam','like','%'.$cad.'%')->get();
        return $kits;
    }


}
