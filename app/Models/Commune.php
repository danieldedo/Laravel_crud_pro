<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'id_departement'
    ];

    public function departement(){
        return $this->belongsTo(Departement::class, 'id_departement');
    }
}
