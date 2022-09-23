<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoCamara',
        'marcaCamara',
        'referenciaCam',
        'fechaIngCam',
        'fechaSalidaCam',      
        'usuarioCam'       
    ];

    public function customers() {
        return $this->hasMany('App\Models\Customer');
    }

    public function scopeNames($cameras, $q)
    {
        if (trim($q)) {
            $categories->where('name', 'LIKE', "%$q%")
            ->orWhere('description', 'LIKE', "%$q%");
        }
    }

}
