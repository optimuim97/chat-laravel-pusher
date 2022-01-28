@extends('layouts.profile')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            My Profile
        </div>
        <div class="card-body">
           <form action="{{route('users.update-profile')}}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nom & Prenoms</label>
                    <input type="text" name="name" id="name" class='form-control' value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class='form-control' value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo" class='form-control'>
                </div>
            </form>
        </div>
    </div>
    <button type="submit" class="btn btn-primary my-2">Modifier le profile</button>
</div>

@endsection
