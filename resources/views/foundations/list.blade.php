@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido a Huellitas</div>

                <div class="card-body">
                    Lista de fundaciones
                    <ul id="errors">
                    @foreach($data["foundations"] as $foundations)
                        @if ($loop->index===0 || $loop->index===1)
                            <b><a href=" {{route('foundations.show', ['id'=>$foundations->getId()]) }} "><li>{{ $foundations->getId() }} - {{ $foundations->getName() }} : {{ $foundations->getEmail() }}</li></a></b>
                        @else
                            <a href=" {{route('foundations.show', ['id'=>$foundations->getId()]) }} "><li>{{ $foundations->getId() }} - {{ $foundations->getName() }} : {{ $foundations->getEmail() }}</li></a>
                        @endif                    
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
