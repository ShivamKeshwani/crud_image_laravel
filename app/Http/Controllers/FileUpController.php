<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Storage;

class FileUpController extends Controller
{
    public function index(){
        return view('fileupload');
    }



    public function store(Request $request){
        $request->validate([
            'file' => 'required'
        ]);

        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('storage/job'), $fileName);

        return back()->with('success', "You have successfully uploaded a file !!")->with('file', $fileName);
    }

    public function show(){
        $path = Storage::path('1676547529.jpg');
        print_r($path);
    }
    // protected function showJobImage($fileName){
    //     $exists = Storage::disk('public')->exists($fileName);

    //     if ($exists) {
    //         $content = Storage::get('public/job/'.$fileName);

    //         $mime = Storage::get('public/job/'.$fileName);

    //         $response = Response::make($content,200);

    //         $response->headers->set('Content-Type', $mime);

    //         return $response;
    //     }else {
    //         abort(404);
    //     }
    // }
}
