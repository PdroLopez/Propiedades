<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;

    protected $table = 'propiedad';

    protected $fillable =
    ['nombre',
    'direccion',
    'rol_propiedad',
    'disponibilidad',
    'tipo_propiedad_id',
    'observacion',
    'orientacion',
    'contribuccion',
    'gastos_comunes',
    'cocina',
    'living_comedor',
    'sala_estar',
    'sala_estar',
    'dormitorios_servicios',
    'n_dormitorios',
    'banios_servicios',
    'banios',
    'fecha',
    'anio_contruccion',
    'tipo_contruccion',
    'calefacion_central',
    'piso',
    'patio',
    'suelo',
    'metraje_construido',
    'metraje_total',
    'bodega',
    'estacionamiento',
    'piscina',
    'terraza',
    'ascensor',
    'hall',
    'escritorio',
    'calefaccion_central',
    'estado_edificio',
    'estado_departamento',
    'logia',
    'valor',
    'llaves',
    'owner_id',
    'estado_id'];


    public function imagenesPropiedad()
    {
        return $this->belongsTo('App\Models\ImagenesPropiedad');
    }

    public function owner()
    {
        return $this->belongsTo('App\Models\Owner','owner_id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Models\TipoPropiedad', 'tipo_propiedad_id');
    }
    public function estado()
    {
        return $this->belongsTo('App\Models\Estado', 'tipo_propiedad_id');
    }
}
