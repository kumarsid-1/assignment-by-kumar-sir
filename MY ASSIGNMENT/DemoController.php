<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function index()
    {
        $evar= DB::table('employees')
        
        ->get();

        return view('employee.index', ['employees' => $evar]);
    }
}
