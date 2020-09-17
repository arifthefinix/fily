<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
            'user_id' => 'required',
        ]);

        $folder = Auth::user()->name;
        $collection = Str::of($request->user_id)->explode(',');
        
        if($request->hasFile('file_name')){
            $path = $request->file('file_name')->store($folder);
            $collection = Str::of($request->user_id)->explode(',');
            foreach($collection as $collect){
                File::create([
                    'file_title' => $request->name,
                    'file_name' =>$path,
                    'owner_id' => Auth::id(),
                    'user_id' => $collect,
                    'file_size' => $request->file('file_name')->getSize(),
                ]);
            }
           
        } 

    }

    public function fileList($id){
        $files = File::where([
            ['owner_id',$id],
            ['user_id',Auth::id()],
        ])->get();
        return $files;
    }

    public function download($id){
        $file = File::find($id);
        return Storage::download($file->file_name);
    }
    
    public function deleteFile($id){
        File::find($id)->delete();
    }

    
}
