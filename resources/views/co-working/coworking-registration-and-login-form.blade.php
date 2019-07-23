@extends('layouts.app')

@section('content')
                 <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-14">
                                    <div class="card">
                                        <div class="card-header" align="center"><h2>Create New Account</h2></div>
                                        <div class="container">
                                            <form method="post" action="{{route('guest.attendance')}}">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                @csrf

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="#first_name">First Name</label>
                                                        <input name="first_name" type="text" class="form-control" id="first_name" placeholder="e.g. Jane">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="#last_name">Last Name</label>
                                                        <input name="last_name" type="text" class="form-control" id="last_name" placeholder="e.g. Doe">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="#email">Email Address</label>
                                                    <input name="email" type="text" class="form-control" id="email" placeholder=" e.g. username@email.com">
                                                </div>

                                                <div class="form-group">
                                                    <label for="contact_number">Contact Number</label>
                                                    <input name="contact_number" type="text" class="form-control" id="contact_number" placeholder="e.g. 0912356789">
                                                </div>

                                                <div class="form-group">
                                                    <label for="#schoolorganization">School/Organization</label>
                                                    <input name="schoolorganization" type="text" class="form-control" id="schoolorganization" placeholder="e.g. MSU-IIT">
                                                </div>

                                                    <div class="form-group">
                                                        <label for="purpose">Purpose</label>
                                                            <select name="purpose" class="form-control">
                                                                <option value="employee">Employee</option>
                                                                <option value="co-working">Co-Working</option>
                                                                <option value="internship">Internship</option>
                                                                <option value="consultation">Consultation</option>
                                                                <option value="visitation">Visitation</option>

                                                            </select>
                                                    </div>

                                                    <button type="submit" id="submit" class="btn btn-primary">Submit</button>

                                            </form>
                                        </div>



                                    </div>
                                </div>
                            </div>
                 </div>







@endsection
