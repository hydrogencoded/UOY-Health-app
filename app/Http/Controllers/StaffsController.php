<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StaffsController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}


public function index(){
    return view('admin.staffs.create');
}

public function create(){
    return view('admin.staffs.create');
}

public function list(){
    $data=[];
    $data['users']=User::all();
    return view('admin.staffs.list')->withData($data);
}

public function store(Request $request){

    $user = new User;
    $user->name =$request->name;
    $user->email =$request->name;
    $user->password = Hash::make($request->name);
    $user->role = $request->role;
    $user->save();
    Session::flash('success',"user created successfully");
    return redirect()->back();

}


public function view($id){
    $data=[];
    $data['users']=User::find($id);
    return view('admin.staffs.view')->withData($data);
}



}
