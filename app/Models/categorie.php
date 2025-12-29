<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $fillable = ['nom'];

    public function produits(){
        return $this->hasMany(produit::class);
    }
}
