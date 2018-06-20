@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
                <hr>
                <div class="card">
                    <div class="card-header">Staff Dashboard</div>
                    <div class="card-body">
                        <h3>Consult a Doctor</h3>


                        <form action="{{ route("consult.store") }}" method="POST">
                            @csrf




                            <div class="form-group">
                                <label for="">Patient</label>
                                <select name="patient_id" id="" class="form-control">
                                    @foreach($data['patients'] as $patient)
                                        <option value="{{ $patient->id }}">{{ $patient->firstname }} {{ $patient->lastname }}</option>
                                        @endforeach
                                        </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Case Information</label>
                                <select name="c_info" id="" required class="form-control">
                                    <option>Acute</option>
                                    <option >Chronic</option>
                                    <option >Pre-Existing</option>
                                    <option >Injury</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="">Diagnosis</label>
                                <input type="text"  required name="diagnosis" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="">Aetiology</label>
                                <input type="text" required name="aetiology" class="form-control">
                            </div>

                                <div class="form-group">
                                <label for="">Symptoms</label>

                                    <textarea required name="symptoms" id=""
                                              class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Clinical Findings</label>

                                    <textarea required name="clinical_findings" id=""
                                              class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Remarks</label>
                                    <textarea required name="remarks" id=""
                                              class="form-control"></textarea>
                            </div>




                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

