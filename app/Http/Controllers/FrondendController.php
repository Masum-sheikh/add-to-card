<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FrondendController extends Controller
{
    //


    public function welcome(){
        $products =Product::get();
        return view('welcome',compact('products'));
    }
    public function details($id){

        $product = Product::find($id);

       return view('frontend.details', compact('product'));

    }
}
