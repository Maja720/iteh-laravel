<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'capital', 'continent'];


    public function predidents()
    {
        return $this->hasMany(President::class);
    }
}
