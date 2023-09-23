<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(Request $request){
        return User::all();
    }
}
