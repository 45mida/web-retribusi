<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id'];

    public function kelola()
    {
        return $this->hasMany(Kelola::class);
    }
}