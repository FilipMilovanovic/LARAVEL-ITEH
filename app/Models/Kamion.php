<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prevoznik;
use App\Models\Tura;

class Kamion extends Model
{
    use HasFactory;

    public function prevoznik()
    {
        return $this->belongsTo(Prevoznik::class);
    }

    public function ture()
    {
        return $this->hasMany(Tura::class);
    }

    protected $fillable = [
        'tablice',
        'model',
        'vozac',
        'prevoznik_id',
    ];
}
