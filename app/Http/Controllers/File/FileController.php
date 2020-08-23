<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Entities\File;

class FileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function uploadFile(Request $request){
        $folder = Auth::user()->name;
        if($request->hasFile('file_name')){
            $path = $request->file('file_name')->store($folder);
            File::create([
                'file_title' => $request->file_title,
                'file_name' =>$path,
                'user_id' => Auth::id(),
            ]);
        }
        
    }
}
