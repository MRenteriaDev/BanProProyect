<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Seller extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guard = 'seller';
    protected $fillable = [
        'name',
        'email',
        'password',
        'stauts',
        'foto',
        'celular',
        'seller_active',
        'ciudad',
        'estado',
        'pais',
        'direccion',
        'cp',
        'inmobiliaria',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Propiedad()
    {
        return $this->belongsTo(Propiedades::class);
        return $this->hasMany(Propiedades::class, "propiedad_id");
    }
}

class Sellers extends model
{

    protected $guarded = [];
    public function Propiedad()
    {
        return $this->belongsTo(Propiedades::class);
        return $this->hasMany(Propiedades::class, "propiedad_id");
    }
}
