@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido a Huellitas</div>

                <div class="card-body">
                    <b> Admin: </b>
                    <br>
                    <button type="button" onclick="window.location=                    
                    '{{ URL::route('admin.foundations.create') }}'">Agrega una fundación</button>
                    <br>
                    <br>
                    <button type="button" onclick="window.location=
                    '{{ URL::route('admin.foundations.list') }}'">Ver fundaciones</button>
                    <br>
                    <br>
                    <b> User: </b>
                    <br>
                    <button type="button" onclick="window.location=
                    '{{ URL::route('user.foundations.list') }}'">Ver fundaciones</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
