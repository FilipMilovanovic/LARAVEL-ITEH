<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kamion;

class Prevoznik extends Model
{
    use HasFactory;

    public function kamioni()
    {
        return $this->hasMany(Kamion::class);
    }

    protected $fillable = [
        'firma',
        'adresa',
        'direktor',
        'sajt',
    ];
}
