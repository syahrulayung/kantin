<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // return view('dashboard');
        $home = DB::table('produks')->get();
 
        // mengirim data pegawai ke view index
        return view('dashboard')->with('home',$home) ;
    }

}
