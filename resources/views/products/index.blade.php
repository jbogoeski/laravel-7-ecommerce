@extends('layouts.master')

@section('content')

    <h1>List of products</h1>

    @if(empty($products))
        <div class="alert alert-warning">
            The list of products is empty
        </div>

    @else
    <div class="table-rensponsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Stock</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->status}}</td>
                </tr>

                @endforeach
            </tbody>
            
        </table>
    </div>

@endsection    

    @endif
