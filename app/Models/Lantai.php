<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lantai extends Model
{
    protected $fillable = ['lantai', 'gedung_id'];
    public function gedung()
    {
        return $this->belongsTo(Gedung::class, 'gedung_id');
    }

    public function ruangans()
    {
        return $this->hasMany(Ruangan::class, 'lantai_id');
    }
}
