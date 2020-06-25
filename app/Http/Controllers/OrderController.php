<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Services\CartService;

class OrderController extends Controller
{
    public $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cart = $this->cartService->getFromCookie();

        if (!isset($cart) || $cart->products->isEmpty()) {
            return redirect()->back()->withErrors('Your Cart is Empty');
        }


        return view('orders.create')->with([
            'cart' => $cart,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('in store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
  
}
