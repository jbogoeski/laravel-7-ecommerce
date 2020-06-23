@extends('layouts.master')

@section('content')

   <h1>Create Product</h1>

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="form-row">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        
        <div class="form-row">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        
        <div class="form-row">
            <label for="">Price</label>
            <input type="number" name="price" min="1.00" step="0.01" class="form-control" required>
        </div>
        
        <div class="form-row">
            <label for="">Stock</label>
            <input type="number" name="stock" min="0" class="form-control" required>
        </div>
        
        <div class="form-row">
            <label for="">Status</label>
            <select name="status" id="" class="custom-select" required>
                <option value="" selected>Select</option>
                <option value="available">Available</option>
                <option value="unavailbale">Unavailbale</option>
            </select>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg">Create Product</button>
        </div>

    </form>



@endsection

