<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard' , ['title' => 'Profitbeans Marketplace | Admin Dashboard']);
    }

    public function base(){
      if(Auth::user()){
        return redirect('dashboard');
      }
      return view('login');
    }
}
