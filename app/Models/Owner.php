<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'car_id_fk'];

    public function cars()
    {
        return $this->hasMany(Car::class, 'id', 'car_id_fk');
    }
}
