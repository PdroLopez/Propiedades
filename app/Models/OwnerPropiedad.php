<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerPropiedad extends Model
{
    use HasFactory;
    protected $table = 'owner_propiedad';

    protected $fillable = ['propiedad_id','owner_id'];



}
