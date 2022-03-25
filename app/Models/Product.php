<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "productos";
    protected $fillable = ['nombre_productos', 'precio', 'fecha_vencimiento', 'unidades_disponibles', 'unidades_reservadas', 'oferta','accesorio'];
    public $timestamps = false;
}
