<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Hello;


use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return $xyz = Member::with('hello')->get();
    }
    public function lastest(){
        return $xyz = Member::with('latestOrder')->get();
    }
    public function oldest(){
        $data = Member::with('oldestOrder')->get()->toArray();

        dd(array_column($data,'oldest_order'));
    }

    

}
