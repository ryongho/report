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

Route::get('/report/{page}', function ($page) {
    
    $start = ($page-1)*30;
    $reports = App\Models\Report::orderby('reg_date','desc')->limit($start,30)->orderby('id','desc')->get();
    echo(json_encode($reports));
    
    //return view('report_list',['reports' => $reports]);
});

