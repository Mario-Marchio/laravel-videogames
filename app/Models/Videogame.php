<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Videogame extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'publisher_id', 'image', 'release_year', 'rate'];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function consoles()
    {
        return $this->belongsToMany(Console::class);
    }
}
