<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
       $users = User::all();
        return response()->json([
            'status' => 'success',
            'data' => $users
        ]);
    }

    public function test(){
        return response()->json([
            'status' => 'success',
            'message' => 'Test route is working'
        ]);
    }
}
