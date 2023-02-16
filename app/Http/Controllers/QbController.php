<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DummyData;
use Illuminate\Support\Facades\DB;


class QbController extends Controller
{
    public function index(){
        $dummy = DB::table('dummy_datas')->select()->orderBy('name')->groupBy('id')->having('id', '>', 15)->get();
        // $dummy = DB::table('dummy_datas')->get();
        $dummy2 = $dummy->toArray();
        // foreach ($dummy as $dummys) {
        //     echo $dummys->name.'<br>';
        // }
        echo "<pre>";
        print_r($dummy2);
     }
     public function test(){
        asset('storage/file.txt');
     }
}
