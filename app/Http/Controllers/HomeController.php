<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Patient;
use Illuminate\Http\Request;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $role =Auth::User()->roles;

        if($role == "staff"){
            $data['patients_count']=Patient::count();
            $data['consults_count']=Consultation::count();
            return view('staffs.dashboard')->withData($data);
        }elseif($role == "admin"){
            return view('admin.dashboard');
        }
    }
}
