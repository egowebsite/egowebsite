<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antenna extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoRadio',
        'marcaRadio',
        'referenciaRadio',
        'fechaIngRadio',
        'fechaSalidaRadio',      
        'usuarioRadio'       
    ];

    public function customers() {
        return $this->hasMany('App\Models\Customer');
    }

    public function scopeNames($antennas, $q)
    {
        if (trim($q)) {
            $categories->where('name', 'LIKE', "%$q%")
            ->orWhere('description', 'LIKE', "%$q%");
        }
    }

}
