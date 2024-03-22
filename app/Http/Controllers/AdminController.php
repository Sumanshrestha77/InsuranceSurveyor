<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function userDashboard()
    {
        return view("userDashboard");
    }
    public function adminDashboard()
    {
        $user = Auth::user();
        // dd($user->usertype);
        if ($user->usertype === 'admin') {
            return view('admin.index');
        } elseif ($user->usertype === 'user') {
            return $this->userDashboard();
        }








        // if (Auth::id()) {
        //     $usertype = Auth()->user()->type;
        //     if ($usertype == 'user') {
        //         return view('dashboard');
        //     } else if ($usertype == 'admin') {
        //         return view('admin.index');
        //     } else {
        //         return redirect()->back();
        //     }
        // }
    }
}
