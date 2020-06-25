@extends('layouts.app')

@section('content')

    <h1>Order Details</h1>

    <h4 class="text-right"><strong>Total: </strong>${{ $cart->total }}</h4>

    <div class="text-right mb-3">
        <form action="{{ route('orders.store') }}" class="d-inline" method="POST">
            @csrf
            
            <button class="btn btn-success" type="submit">Confirm Order</button>
        </form>
    
    </div>
                    
    <div class="table-rensponsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart->products as $product)
                <tr>
                    <td>
                        <img src="{{ asset($product->images->first()->path) }}" width="100" alt="">
                        {{$product->title}}
                    </td>
                    <td>${{$product->price}}</td>
                    <td>{{$product->pivot->quantity}}</td>
                    <td>${{$product->total }}</td>
                </tr>

                @endforeach
            </tbody>
            
        </table>
    </div>

@endsection    

