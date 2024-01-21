<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'employee_type_fk'
    ];

    protected $hidden = [
        'password',
    ];

    public function type()
    {
        return $this->hasOne(EmployeeType::class, 'id', 'employee_type_fk');
    }
}
