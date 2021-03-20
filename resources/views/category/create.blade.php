@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">Create Category</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form class="form-group" method="POST" action="{{ route('category.save') }}">
                        @csrf
                        <label>Name</label>
                        <input class="form-control" type="text" placeholder="Enter name" name="name" value="{{ old('name') }}" required />
                        <br>
                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Send" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection