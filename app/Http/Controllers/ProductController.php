<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    public function index() {

        $products = Product::all();

        return view('products.index')->with([
            'products' => $products,
        ]);
    }

    public function create() {
        return "Create form from controller";
    }

    public function store() {
        //
    }

    public function show($product) {


        $product = Product::findOrFail($product);

        return view('products.show')->with([
            'product' => $product,
        ]);
    }

    public function edit($product) {
        return "showing form to edit {$product} from controller";
    }

    public function update($product) {
        return "showing form to update {$product} from controller";
    }

    public function destroy($product) {

    }
}
