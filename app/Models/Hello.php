<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;


class Hello extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    public function member(){
       return $this->belongsTo(Member::class, 'id');
    }
}
