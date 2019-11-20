<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $userRole = Auth::user()->role;
        
        if ($userRole == "kesiswaaan") {
            return view('admin.home');
        } else if($userRole == "guru") {
            return view('guru.index');
        } else  if ($userRole == "pembimbing"){
            return view('pembimbing.index');
        } else if ($userRole == 'siswa'){
            return view('siswa.index');
        }
    }
}
