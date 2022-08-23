<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatusPropiedad extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Propiedad()
    {

        return $this->hasMany(Propiedades::class, "estatus_propiedad_id");
    }
}
