<?php

namespace App\Http\Controllers;
use App\Models\ProductVetements;
use Illuminate\Http\Request;

class Product_vetementsController extends Controller
{
    public function index() {
        return ProductVetements ::all();
    }
    
    public function store(Request $request) {
        return ProductVetements ::create($request->all());
    }
    
    public function show(ProductVetements  $product) {
        return $product;
    }
    
    public function update(Request $request, ProductVetements  $product) {
        $product->update($request->all());
        return $product;
    }
    
    public function destroy(ProductVetements  $product) {
        $product->delete();
        return response()->noContent();
    }
}
