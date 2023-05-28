<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];

    public function departures(){
        return $this->hasMany(Invoice::class, 'departure_id');
    }

    public function arrivals(){
        return $this->hasMany(Invoice::class, 'arrival_id');
    }

    public function currents(){
        return $this->hasMany(Invoice::class, 'current_id');
    }

    public $timestamps = false;
}
