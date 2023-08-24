<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms'; // this is the table name
    protected $fillable = ['hotel_id', 'guest_id', 'number', 'types', 'price'];
    public function discounts()
    {
        return $this->belongsToMany(Discount::class);
    }

    public function hotel()
    {
        return $this->hasMany(Hotel::class);
    }

    public function guest()
    {
        return $this->hasMany(Guest::class);
    }
}
