<?php

namespace App\Http\Controllers;



use App\Models\Patient;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $data['consults']=Consultation::all();
        $data['patients']=Patient::all();
        return view('staffs.consult.list')->withData($data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[];
        $data['patients']=Patient::all();
        return view('staffs.consult.create')->withData($data);
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
            'c_info' => 'required',
        ]);

        //save

        $consult =new Consultation;

        $consult->patient_id=$request->patient_id;
        $consult->c_info=$request->c_info;
        $consult->diagnosis =$request->diagnosis;
        $consult->aetiology =$request->aetiology;
        $consult->symptoms =$request->symptoms;
        $consult->clinical_findings =$request->clinical_findings;
        $consult->remarks =$request->remarks;

        $consult->save();

        Session::flash('success',"Consultation logged successfully");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation)
    {
        //
    }
}
