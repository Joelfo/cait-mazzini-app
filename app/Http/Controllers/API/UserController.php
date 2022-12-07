<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        phpinfo();
    }

    public function store(Request $request){
        if (DB::insert('INSERT INTO users(name, email, password) VALUES(?,?,?)', [$request->input('name'), $request->input('email'), $request->input('password')])) echo "teste";
        
    }

    
}
