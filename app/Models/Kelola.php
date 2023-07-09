<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelola extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('nama_dinasopd', 'like', '%' . $search . '%');
                //->orWhere('nama_jenis', 'like', '%' . $search . '%');
            });
        });
    }

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }

    public function tarif()
    {
        return $this->hasMany(Tarif::class);
    }
}