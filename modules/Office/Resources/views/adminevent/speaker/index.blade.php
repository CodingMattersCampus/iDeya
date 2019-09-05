@extends('adminlte::page')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-3xl">
                            Speaker Listings
                        </h1>
                        <a href="{{route('adminevent.speaker.add')}}" role="button" class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full ml-2" id="create-event">
                            Add Speaker
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table table-bordered table-striped .table-responsive">
                            <thead class="thead-dark">
                            <tr>
                                <th>Full Name</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Profession</th>
                                <th>Organization</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($speakers as $speaker)
                                <tr>
                                    <td> {{$speaker->fullName()}} </td>
                                    <td> {{$speaker->contact}} </td>
                                    <td> {{$speaker->email}} </td>
                                    <td> {{$speaker->profession }} </td>
                                    <td> {{$speaker->organization}} </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
