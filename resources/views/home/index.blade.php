@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido a Huellitas</div>

                <div class="card-body">
                    
                    <button type="button" onclick="window.location=
                    '{{ URL::route('foundations.create') }}'">Agrega una fundación</button>
                    <br>
                    <br>
                    <button type="button" onclick="window.location=
                    '{{ URL::route('foundations.list') }}'">Fundaciones</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
