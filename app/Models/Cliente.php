<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';

    protected $fillable = ['nombre','rut','direccion','correo','adquision','tipo_vivienda','can_dormitorios','bodega','piscina','tipo_cliente'];
}
