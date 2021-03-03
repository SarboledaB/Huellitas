@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["user"]["username"] }}</div>
                <div class="card-body">
                    <b>Id:</b> {{ $data["user"]["id"] }}<br />
                    <b>Username:</b> {{ $data["user"]["username"] }}<br />
                    <b>First Name:</b> {{ $data["user"]["firstName"] }}<br />
                    <b>Last Name:</b> {{ $data["user"]["lastName"] }}<br />
                    <b>Email:</b> {{ $data["user"]["email"] }}<br />
                    <b>Password:</b> {{ $data["user"]["password"] }}<br />
                    <br>
                    <a class="btn btn-outline-danger" href="{{ route('user.delete', ['id' => $data['user']['id']] ) }}">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection