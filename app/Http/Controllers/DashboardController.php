<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use AuthorizesRequests;
class DashboardController extends Controller
{
    // public function __construct()
    // {   
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $user = auth()->user();
        return view('dashboard')->with('posts', $user->posts);
    }
}
