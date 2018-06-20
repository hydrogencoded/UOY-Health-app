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
                        <h3>New Patient</h3>


                        <form action="{{ route("patient.store") }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Firstname</label>
                                <input type="text" name="firstname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Middlename</label>
                                <input type="text" name="middlename" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Lastname</label>
                                <input type="text" name="lastname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Blood Group</label>
                                <input type="text" name="b_g" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Date of Bith</label>
                                <input type="date" name="dob" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Sex</label>
                                <select name="sex" id="" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                             <div class="form-group">
                                <label for="">Marital Status</label>
                                <select name="m_status" id="" class="form-control">
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Occupation</label>
                                <input type="text" name="occupation" class="form-control">
                            </div>
                            <hr>

                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>

                              <div class="form-group">
                                <label for="">Address</label>
                             <textarea name="address" id=""  class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">City</label>
                                <input type="text" name="city" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">State</label>
                                <input type="text" name="state" class="form-control">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="">Next of Kin</label>
                                <input type="text" name="nok_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Next of Kin Relationship</label>
                                <input type="text" name="nok_relationship" class="form-control">
                            </div>
  <div class="form-group">
                                <label for="">Next of Kin Phone</label>
                                <input type="text" name="nok_phone" class="form-control">
                            </div>

                            <input type="submit" class="btn btn-primary" value="Save Changes">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

