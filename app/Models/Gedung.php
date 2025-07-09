<?php

namespace App\Models;
use App\Models\Lantai;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    protected $table = 'gedung';
    protected $fillable = [
        'nama_gedung',
    ];

    public function lantai(){
        return $this->hasMany(Lantai::class, 'gedung_id');
    }
}
