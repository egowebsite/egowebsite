<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Router extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoRouter',
        'marcaRouter',
        'referenciaRouter',
        'fechaIngRouter',
        'fechaSalidaRouter',      
        'usuarioRouter'       
    ];

    public function customers() {
        return $this->hasMany('App\Models\Customer');
    }

    public function scopeNames($routers, $q)
    {
        if (trim($q)) {
            $categories->where('name', 'LIKE', "%$q%")
            ->orWhere('description', 'LIKE', "%$q%");
        }
    }

}