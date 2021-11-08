<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;

class FileController extends Controller
{
    
   /*  public function saveArquivo() {
        if ($request->hasFile('file')) {
            $file = $request-file('file');
            $filename = time().$file->getClientOriginalName();
            Storage::disk('s3')->put($filename, file_get_contents($file));
        }
    } */
    
    public function store(Request $request)
    {
        if ($request->file){
            $ext = $request->file->extension();
            if ($ext == 'pdf' ){
                $data = file_get_contents($request->file);
                $base64 = 'data:file/'.$ext.';base64'.base64_encode($data);
                return response()->json($base64, 201);
            }
            return response()->json('Arquivo invalida', 400);
        }
        return response()->json('sem Arquivo', 201);
    }

}
