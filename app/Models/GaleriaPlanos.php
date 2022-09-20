<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriaPlanos extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Propiedad()
    {

        return $this->belongsTo(Propiedades::class);
    }
}
