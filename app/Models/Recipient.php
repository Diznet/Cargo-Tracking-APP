<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'address',
        'contact'
    ];

    public function invoices(){
        return $this->hasMany(Invoice::class);
    }

    public $timestamps = false;
}
