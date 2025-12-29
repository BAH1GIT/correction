<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    protected $fillable = [
        "nom",
        "prix",
        "image",
        "description",
        "categorie_id",
    ];
    public function categorie(){
        return $this->belongsTo(categorie::class);
    }
}
