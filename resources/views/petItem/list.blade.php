@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="row p-5">
    <div class="col-md-12">
        @include('util.message')
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Value</th>
                    <th scope="col">Rating</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data["products"] as $product)
                <tr>
                    @if($loop->iteration <= 2) <th scope="row">
                        <a href="{{ route('petItem.show', ['id' => $product->getId() ]) }}"> {{ $product->getId() }} </a>
                        </th>
                        @else
                        <td>
                            <a href="{{ route('petItem.show', ['id' => $product->getId() ]) }}"> {{ $product->getId() }} </a>
                        </td>
                        @endif
                        <td>{{ $product->getName() }}</td>
                        <td>{{ $product->getValue() }}</td>
                        <td>{{ $product->getrating() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection