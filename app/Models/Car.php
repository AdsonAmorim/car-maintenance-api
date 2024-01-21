<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['license_plate', 'name', 'owner_id_fk'];

    public function owner()
    {
        return $this->hasOne(Owner::class, 'id', 'owner_id_fk');
    }
}
