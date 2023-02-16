<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\BulkInserts;

class BulkInsertController extends Controller
{
    public function bulkstore(){
       BulkInserts::tlink();
    }
}
