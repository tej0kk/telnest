<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['houtels_id', 'rooms_id', 'check_in', 'check_out', 'banks_id'];

    public function houtel()
    {
        return $this->belongsTo(Houtel::class, 'houtels_id', 'id');
    }
    
    public function room()
    {
        return $this->belongsTo(Room::class, 'rooms_id', 'id');
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'banks_id', 'id');
    }
}
