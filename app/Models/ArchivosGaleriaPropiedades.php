<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivosGaleriaPropiedades extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function GaleriaPropiedades()
    {

        return $this->belongsTo(GaleriaPropiedades::class);
    }
}
