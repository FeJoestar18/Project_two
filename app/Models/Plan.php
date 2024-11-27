<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model            //Podemos dizer que um PLANO é um conjunto de assinaturas
{
    public function subscripitions()
    {
        return $this->hasMany(Subscripition::class);
    }
}