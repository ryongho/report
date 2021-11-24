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

use App\Http\Controllers\Controller;
use App\Http\Controllers\MeritController;
use App\Http\Controllers\ReportController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/report/{date?}', function ($page = 1) {
    
    $start = ($page-1)*30;
    $reports = App\Models\Report::offset($start)->limit(30)->orderby('reg_date','desc')->get();
    echo(json_encode($reports));
    
    //return view('report_list',['reports' => $reports]);
});


Route::get('/report/list/{date?}',[ReportController::class, 'list'] );


Route::get('/merit/{date?}/{jongmok?}', [MeritController::class, 'list']);
