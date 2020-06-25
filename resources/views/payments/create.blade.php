@extends('layouts.app')

@section('content')

    <h1>Payment Details</h1>

    <h4 class="text-center"><strong>Total: </strong>${{ $order->total }}</h4>

    <div class="text-center mb-3">
        <form action="{{ route('orders.payments.store', ['order' => $order->id]) }}" class="d-inline" method="POST">
            @csrf
            
            <button class="btn btn-success" type="submit">Pay</button>
        </form>
    
    </div>
                    
@endsection    

