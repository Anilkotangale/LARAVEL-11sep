<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
       $products = Product::paginate(7);
        return view('products.index',['products'=> $products]);
           
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        //dd($request);
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }
}
