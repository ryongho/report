<?php

use Illuminate\Support\Facades\Route;
use App\Models\Report;

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

Route::get('/report', function () {
    
    $reports = App\Models\Report::get();
    echo(json_encode($reports));
    
    //return view('report_list',['reports' => $reports]);
});
