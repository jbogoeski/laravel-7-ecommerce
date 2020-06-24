@extends('layouts.app')

@section('content')

   <h1>Edit Product</h1>

    <form action="{{route('products.update', ['product'=> $product->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="">Title</label>
            <input value="{{old('title') ?? $product->title}}" type="text" name="title" class="form-control" required>
        </div>
        
        <div class="form-row">
            <label for="">Description</label>
            <input value="{{old('description') ?? $product->description}}" type="text" name="description" class="form-control" required>
        </div>
        
        <div class="form-row">
            <label for="">Price</label>
            <input value="{{old('price') ?? $product->price}}" type="number" name="price" min="1.00" step="0.01" class="form-control" required>
        </div>
        
        <div class="form-row">
            <label for="">Stock</label>
            <input value="{{old('stock') ?? $product->stock}}" type="number" name="stock" min="0" class="form-control" required>
        </div>
        
        <div class="form-row">
            <label for="">Status</label>
            <select name="status" id="" class="custom-select" required>
                <option value="" selected>Select</option>
                <option value="available" {{ old('status')  == 'available' ? 'selected' : ($product->status == 'available' ? 'selected' : '')}}>Available</option>
                <option value="unavailable" {{ old('status')  == 'unavailable' ? 'selected' : ($product->status == 'unavailable' ? 'selected' : '')}}>Unavailable</option>
            </select>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg mt-3">Update Product</button>
        </div>

    </form>



@endsection

