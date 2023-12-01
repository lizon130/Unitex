<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        return view('admin.dashboard');
    }

    public function logout()
    {
        // $user = User::latest()->get();
        // return view('admin.layouts.template', compact('user'));
        Auth::logout();
        return redirect('login');
    }
}
