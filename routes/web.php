<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//use App\Http\FileController;
use Illuminate\Support\Facades\Storage;
use App\Models\Usuario;
//use App\Models\Arquivo;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-usuario', function (Request $request) {
    Usuario::create([
        
        'name' => $request->name,
        'email' => $request->email,
        'date' => $request->date

    ]);
    
    if ($request->file('arquivo')) {
        
        $extension = $request->arquivo->extension();

        //Storage::disk('s3')->put('arquivo/', $content);
        $path = $request->arquivo->store('arquivo', 's3');

    }

    

    
    echo "Usuário cadastrado com sucesso!";
});

