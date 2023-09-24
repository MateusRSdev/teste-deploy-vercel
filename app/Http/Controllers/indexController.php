<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(Request $request){
        return view("index");
    }
    public function post(Request $request){
    dd($request->header("origin"));
    }
}
