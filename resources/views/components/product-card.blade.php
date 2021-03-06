<div class="card">

    <img class="card-img-top" src="{{ asset($product->images->first()->path) }}" height="380" alt="">
    <div class="card-body">
        <h4 class="text-right"><strong>${{ $product->price }}</strong></h4>
        <h5 class="card-title">{{ $product->title }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <p class="card-text"><strong>{{ $product->stock }} left</strong></p>
        
        @if(isset($cart))
        <p class="card-text">{{ $product->pivot->quantity }}  in your cart <strong>(${{ $product->total }})</strong></p>
        
        <form action="{{ route('products.carts.destroy', ['product' => $product->id, 'cart'=> $cart->id]) }}" class="d-inline" method="POST">
            @csrf
            @method('DELETE')
            
            <button class="btn btn-danger" type="submit">Remove from Cart</button>
        </form>
        @else

        <form action="{{ route('products.carts.store', ['product' => $product->id]) }}" class="d-inline" method="POST">
            @csrf
            
            <button class="btn btn-success" type="submit">Add to Cart</button>
        </form>

        @endif


    </div>



</div>

