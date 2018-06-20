<?php

namespace App\Http\Controllers;

use App\Models\Patient;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PatientController extends Controller
{

    public function __construct()
    {
    $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$data=[];
$data['patients']=Patient::all();
        return view('staffs.patients.list')->withData($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('staffs.patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
     $this->validate($request,[
         'firstname' => 'required',
     ]);

     //save

        $patient =new Patient;
        $patient->lastname=$request->lastname;
        $patient->firstname =$request->firstname;
        $patient->middlename =$request->middlename;
        $patient->sex =$request->sex;
        $patient->phone =$request->phone;
        $patient->address =$request->address;
        $patient->city =$request->city;
        $patient->state =$request->state;
        $patient->occupation =$request->occupation;
        $patient->occupation =$request->occupation;
        $patient->marital_status =$request->m_status;
        $patient->blood_group =$request->b_g;
        $patient->nok_name =$request->nok_name;
        $patient->nok_relationship =$request->nok_relationship;
        $patient->nok_phone =$request->nok_phone;
        $patient->dob =$request->dob;

        $patient->save();

        Session::flash('success',"Patient added successfully");
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }



    public function search(Request $request){
        //get data
        $data=[];
        $param=$request->input('param');
        $key=$request->input('key');
        if(empty($param)){
            Session::flash('error',"No search Param");
            return redirect()->back();

        }else{
            $data['results']= DB::table('patients')->where([
                [$key,'like','%'.$param.'%'],

            ])->get();
        }


        return $data['results'];
    }
}
