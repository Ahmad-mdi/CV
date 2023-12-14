@extends('panel.layouts.master')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Edit Your Profile</h1>
        <form method="post" action="/admin/profile/update">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input name="name" type="text" value="{{$user->name}}" class="form-control" id="name" placeholder="Enter Your FullName...">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">LastName</label>
                    <input name="lastName" type="text" value="{{$user->lastName}}" class="form-control" id="lastName" placeholder="Enter Your FullName...">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input name="email" value="{{$user->email}}" type="email" class="form-control" id="email" placeholder="Enter Your Email...">
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input name="phone" value="{{$user->phone}}" type="text" class="form-control" id="phone" placeholder="Enter Your Phone...">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Address</label>
                    <input name="address" value="{{$user->address}}" type="text" class="form-control" id="inputAddress" placeholder="Enter Your Address...">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Github</label>
                    <input name="github_link" value="{{$user->github_link}}" type="text" class="form-control" id="inputAddress" placeholder="Enter Your Github Address...">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Linkedin</label>
                    <input name="linkedin_link" value="{{$user->linkedin_link}}" type="text" class="form-control" id="inputAddress" placeholder="Enter Your Linkedin Address...">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">About</label>
                <textarea name="about" class="form-control">{{$user->about}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Info</button>
        </form>
        @include('panel.layouts.error')
    </div>
@endsection
