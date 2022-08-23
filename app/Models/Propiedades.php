<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function EstatusPropiedad()
    {

        return $this->belongsTo(EstatusPropiedad::class);
    }

    public function Locacion()
    {

        return $this->belongsTo(Locacion::class);
    }

    public function TipoPropiedad()
    {

        return $this->belongsTo(TipoPropiedad::class);
    }

    public function Nearbys()
    {

        return $this->belongsTo(Nearbys::class);
    }

    public function Review()
    {

        return $this->hasMany(Reviews::class, "propiedad_id");
    }

    public function SolicitudVendedor()
    {

        return $this->belongsTo(SolicitudVendedor::class);
    }

}
