@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="row p-5">
    <div class="col-md-12">
        @include('util.message')
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <!-- <th scope="col">ID</th> -->
                    <th scope="col">Name</th>
                    <th scope="col">Value</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data["petItems"] as $petItem)
                <tr>
                    <!-- @if($loop->iteration <= 2) 
                        <th scope="row">
                            <a href="{{ route('petItem.show', ['id' => $petItem->getId() ]) }}"> {{ $petItem->getId() }} </a>
                        </th>
                    @else
                        <td>
                            <a href="{{ route('petItem.show', ['id' => $petItem->getId() ]) }}"> {{ $petItem->getId() }} </a>
                        </td>
                    @endif -->
                    <td>{{ $petItem->getName() }}</td>
                    <td>{{ $petItem->getValue() }}</td>
                    <td>{{ $petItem->getCategory() }}</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Edit</button>
                        <form method="POST" action="{{ route('petItem.delete', ['id' => $petItem->getId()]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection