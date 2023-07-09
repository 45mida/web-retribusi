<?php

namespace App\Models;

use App\Models\Kelola;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarif extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('jns_layanan', 'like', '%' . $search . '%');
                //->orWhere('nama_dinasopd', 'like', '%' . $search . '%');
            });
        });
    }

    public function dinasopd()
    {
        return $this->belongsTo(Kelola::class);
    }

    public function jenis()
    {
        return $this->hasMany(Jenis::class);
    }
}