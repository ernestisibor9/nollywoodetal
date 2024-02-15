<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function genre(){
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
    public function producer(){
        return $this->belongsTo(Producer::class, 'producer_id', 'id');
    }
}
