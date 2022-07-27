<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Reporte;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('pdftipopersona{buscartipo}',[Reporte::class,'tipopersona']);
Route::get('pdfnombre{buscarnombre}',[Reporte::class,'pornombre']);
Route::get('listapersonaspdf',[Reporte::class,'listapersona']);
