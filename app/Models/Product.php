<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    #se espesifica el nombre de la tabla
    protected $table = 'product';


    #Se espesifica la llave primaria de la tabla
    protected $id = 'id';

    #utilizar para los campos created_at y update_at
    public $timestamps = false;

    #expesificamos las columnas existentes de la tabla
    protected $fillable = [
        'name',
        'description',
        'price',   
        'stock'
    ];
}
