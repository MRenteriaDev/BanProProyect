<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zonas extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Locacion()
    {

        return $this->hasMany(Locacion::class, "zona_id");
    }
}
