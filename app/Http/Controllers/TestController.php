<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function getData(){
        $data=DB::table('testdbs')->get();
        return $data;
    }
}
