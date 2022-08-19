<?php

namespace App\Models;

use App\Http\Middleware\Seller;
use App\Models\Seller as ModelsSeller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewSeller extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Seller()
    {

        return $this->belongsTo(ModelsSeller::class);
    }
}
