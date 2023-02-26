<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'rek', 'logo'];

    public function order()
    {
        return $this->hasMany(Order::class, 'banks_id', 'id');
    }
}
