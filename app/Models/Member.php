<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hello;

class Member extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    public function hello(){
       return $this->hasOne(Hello::class, 'id');
    }
    public function latestOrder()
    {
        return $this->hasOne(Hello::class, 'id')->latestOfMany();
    }
    public function oldestOrder()
    {
        return $this->hasOne(Hello::class, 'id')->oldestOfMany();
    }

}
