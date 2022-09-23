<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'Usuario',
        'fechaEvento',
        'Cedula',
        'Telfono', 
        'direccion',
        'e-mail',
        'Ip_Radio', 
        'Ip_Router',
        'Tipo',
        'Serial',
        'Plan',
        'Nodo_Sectorial', 
        'Coordenadas',
        'Azimut',
        'Altura', 
        'Frecuencia',
        'Alineacion',
        'otrosEquiposInstalados',
        'Serial2',
        'Observacion',              
        'Estado'
    ];
       
    public function antennas() {
        return $this->hasMany('App\Models\Antenna');
    }
    
    public function cameras() {
        return $this->hasMany('App\Models\Camera');
    }

    public function routers() {
        return $this->hasMany('App\Models\Router');
    }

    public function users() {
        return $this->hasMany('App\Models\User');
    }

    

    public function scopeNames($customers, $q)
    {
        if (trim($q)) {
            $projects->where('name', 'LIKE', "%$q%")
                     ->orWhere('code', 'LIKE', "%$q%");
        }
    }
}
