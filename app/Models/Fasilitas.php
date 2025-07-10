<?php

namespace App\Models;
use App\Models\Fasilitas_Ruangan;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $fillable =[
        'nama_fasilitas',
    ];

    public function fasilitas_ruangan(){
        return $this->hasMany(Fasilitas_Ruangan::class, 'fasilitas_id');
    }

    public function ruangan()
    {
        return $this->belongsToMany(Ruangan::class, 'fasilitas_ruangan');
    }
    
}
