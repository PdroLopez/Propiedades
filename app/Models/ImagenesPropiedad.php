<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenesPropiedad extends Model
{
    use HasFactory;

    protected $table = 'propiedad_img';

    protected $fillable = ['cartel','tipo','ruta','propiedad_id' ];

    public function propiedad()
    {
        return $this->belongsTo('App\Models\Propiedad','propiedad_id');
    }
}
