<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class MtomController extends Controller
{
    public function index(){
        $data = Employee::with('roles')->get()->toArray();
        // dd($data);

         $roleData = [] ;
        foreach($data as $key=>$value){

            $roleData[$value["name"]] =array_column($value['roles'],'name')[0];

        }
        dd($roleData);
        // $data2 = $data['roles'];
        // foreach($data2 as $roles){
        //     echo array_column($data2,'pivot');
        // }
        $key =array_column($data,'name');
        dd(array_column($data,'roles'));
    }
}
