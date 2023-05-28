<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function departure(){
        return $this->belongsTo(City::class, 'departure_id');
    }

    public function current(){
        return $this->belongsTo(City::class, 'current_id');
    }

    public function arrival(){
        return $this->belongsTo(City::class, 'arrival_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sender(){
        return $this->belongsTo(Sender::class);
    }

    public function recipient(){
        return $this->belongsTo(Recipient::class);
    }
}
