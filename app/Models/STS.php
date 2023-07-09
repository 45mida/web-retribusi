<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class STS extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id'];

    public function kelola()
    {
        return $this->belongsTo(Kelola::class);
    }

    public function tarif()
    {
        return $this->hasMany(Tarif::class);
    }
}