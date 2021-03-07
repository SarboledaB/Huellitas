@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">
                    {{ $data["product"]["name"] }}
                    <h6 class="text-muted">Rating: {{ $data["product"]["rating"] }}</h6>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Value: {{ $data["product"]["value"] }}</h6>
                    <b>Details:</b> {{ $data["product"]["details"] }}<br />
                    <br />
                    <form method="POST" action="{{ route('petItem.delete', ['id' => $data["product"]["id"] ]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-lg btn-block">delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection