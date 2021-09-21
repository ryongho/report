<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Merit;

class MeritController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function list(Request $request){
        $date = $request->date;
        $jongmok = $request->jongmok;

        $rows = Merit::where('created_at','>',$date.' 00:00:00')->where('name', $jongmok)->orderby('created_at','asc')->get();
        $rows->cnt = count($rows);
        //echo($row->cnt);
        //print_r($row);

        return view('list',['rows' => $rows]);

    }
}
