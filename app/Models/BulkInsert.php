<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulkInsert extends Model
{
    use HasFactory;
    protected $table = 'bulkinserts';
    protected $primaryKey = 'id';
    protected $fillable = ['student_name', 'age', 'city'];
}
