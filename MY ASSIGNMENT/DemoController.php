<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function index()
    {
        $evar= DB::table('employees')
        ->select('employee_id', 'name', 'DATEDIFF(SYSDATE(), DOJ')/365 as years)
        ->get();

        return view('employee.index', ['employees' => $evar]);
    }
}
