<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kit extends Model
{
    use HasFactory;
    protected $fillable=['cod_programa',
    'nom_programa',
    'programa',
    'cod_meta',
    'nom_meta',
    'meta',
    'cod_subfin',
    'nom_subfin',
    'sub_finalidad',
    'cod_producto',
    'cod_actividad',
    'cod_clasificador',
    'nom_clasificador',
    'clasificador',
    'nivel',
    'tipo_bien',
    'tipo_calculo',
    'cod_item_fam',
    'nom_item_fam',
    'item_fam'];
}
