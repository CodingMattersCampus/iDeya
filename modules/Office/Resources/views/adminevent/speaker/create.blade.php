@extends('adminlte::page')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="col-md-8">
                <form method="POST" action="{{route('adminevent.speaker.store')}}">
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
                <h3>Add Speaker</h3><br>
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input name="first_name" class="form-control" id="first_name" type="text" placeholder="e.g. Jane">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input name="last_name" class="form-control" id="last_name" type="text" placeholder="e.g.Doe">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input name="email" class="form-control" id="email" type="text" placeholder="e.g. username@email.com">
                </div>
                <div class="form-group">
                    <label for="organization">Organization/Company:</label>
                    <input name="organization" class="form-control" id="organization" type="text" placeholder="e.g. Google">
                </div>
                <div class="form-group">
                    <label for="profession">Profession:</label>
                    <input name="profession" class="form-control" id="profession" type="text" placeholder="e.g. Teacher">
                </div>
                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input name="contact" class="form-control" id="contact" type="text" placeholder="e.g. 09123456789">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input name="description" class="form-control" id="description" type="text" placeholder="A world renowned Doctor">
                </div>
                <div class="form-group">
                    <button id="add_speaker" type="submit" class="btn btn-primary">Add Speaker</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection