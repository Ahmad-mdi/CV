@extends('panel.layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Welcome To Profile</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">lastName</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->lastName}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    <a href="{{url('/admin/profile/edit')}}">
                        <i class="fa fa-user-edit cursor"></i>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- /.container-fluid -->
@endsection
