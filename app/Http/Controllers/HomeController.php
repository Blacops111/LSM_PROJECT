<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return view('welcome');
        }

        return redirect()->route(Auth::user()->role === 'teacher' ? 'admin.dashboard' : 'student.dashboard');
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function studentDashboard()
    {
        return view('student.dashboard');
    }
}
