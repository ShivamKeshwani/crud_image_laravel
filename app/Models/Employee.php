<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class Employee extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    public function roles(){
        return $this->belongsToMany(Role::class, 'employee_role', 'employee_id', 'role_id');
    }
}
