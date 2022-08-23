<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudVendedor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Seller()
    {

        return $this->belongsTo(Seller::class);
    }

    public function Propiedad()
    {

        return $this->belongsTo(Propiedades::class);
    }
}
