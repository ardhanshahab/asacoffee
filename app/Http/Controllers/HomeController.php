<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['products'] = Product::all() ?? 0;
        $data['orders']   = Order::all() ?? 0;
        $data['total']    = Order::where('created_at', 'LIKE', '%'. date('Y-m-d') .'%')->sum('total');
        $data['carts']    = Cart::where('created_at', 'LIKE', '%'. date('Y-m-d') .'%')->sum('qty');
        return view('home', compact('data'));
    }
}
