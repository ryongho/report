<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function list(Request $request){
        $page = $request->page;

        $start = ($page-1)*30;
        $reports = Report::offset($start)->limit(30)->orderby('reg_date','desc')->get();
        return view('report_list',['reports' => $reports]);

    }
}
