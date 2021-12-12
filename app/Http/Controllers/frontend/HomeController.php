<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertising;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request){
        if(auth()->user()->trader_id==2){
            $advertisings = Advertising::get();

            $products = Product::whereHas('Clients', function ($q) {
                $q->where('status', 'binding');
            })->get();
            $productdiscount = Product::whereNotNull('discount')->where('trader_id',2)->get();
            return view('frontend.welcome', compact('advertisings', 'products', 'productdiscount'));
        }elseif(auth()->user()->trader_id==1){
            $advertisings = Advertising::get();


            $products = Product::whereHas('Clients', function ($q) {
                $q->where('status', 'binding');
            })->get();
            $productdiscount = Product::whereNotNull('discount')->where('trader_id',1)->get();
          return view('frontend.welcome', compact('advertisings', 'products', 'productdiscount'));
        }

    }
  



}
