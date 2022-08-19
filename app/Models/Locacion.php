<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locacion extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Zona()
    {

        return $this->belongsTo(Zonas::class);
    }

    public function Propiedad()
    {

        return $this->hasMany(Propiedades::class, "locacion_id");
    }
}
