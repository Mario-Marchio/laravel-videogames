<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    protected $fillable = ['label', 'year_production', 'company'];

    public function videogames()
    {
        return $this->belongsToMany(Videogame::class);
    }
}
