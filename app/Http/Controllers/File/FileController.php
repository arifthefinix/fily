<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;

use App\Entities\File;

class FileController extends Controller
{

    function __construct()
    {
        $this->middleware('auth')->only(['uploadFile']);
    }


    public function uploadFile(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $folder = Auth::user()->name;
        if($request->hasFile('file_name')){
            $path = $request->file('file_name')->store($folder);
            File::create([
                'file_title' => $request->name,
                'file_name' =>$path,
                'user_id' => Auth::id(),
                'file_size' => $request->file('file_name')->getSize(),
            ]);
        } 
    }

    public function fileList($id){
        $files = File::where('user_id',$id)->get();
        return $files;
    }

    public function download($id){
        $file = File::find($id);
        return Storage::download($file->file_name);
    }

    
}
