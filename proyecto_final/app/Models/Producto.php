<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos'; // el nombre de la tabla de mi base de datos
    protected $primaryKey = 'ID';   
    public $timestamps = false;     // si no tienes created_at y updated_at
}