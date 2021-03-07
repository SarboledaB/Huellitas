@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">Create product</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form class="form-group" method="POST" action="{{ route('petItem.save') }}">
                        @csrf
                        <label>Name</label>
                        <input class="form-control" type="text" placeholder="Enter name" name="name" value="{{ old('name') }}" required />
                        <br>
                        <label>Details</label>
                        <input class="form-control" type="text" placeholder="Enter details" name="details" value="{{ old('details') }}" required />
                        <br>
                        <label>Value</label>
                        <input class="form-control" type="number" placeholder="Enter value" name="value" value="{{ old('value') }}" required />
                        <br>
                        <label>Rating</label>
                        <input class="form-control" type="number" placeholder="Enter rating" name="rating" value="{{ old('rating') }}" required />
                        <br>
                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Send" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection