<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Auth;

class HomeController extends Controller
{
    public function __construct()   {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index() {
        $user = Auth::user();

        $user->authorizeRoles('admin');

        return view('admin.home');
    }
}
