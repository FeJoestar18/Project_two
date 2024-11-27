<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model            //Um produto pode ter relação com muitas categorias
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
