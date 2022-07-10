<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    use HasFactory;
    protected $fillable = ['country_id', 'politician_id', 'from', 'to'];
    protected $with = ['politician', 'country'];


    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function politician()
    {
        return $this->belongsTo(Politician::class);
    }
}
