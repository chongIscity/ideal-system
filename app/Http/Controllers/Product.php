<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as ProductModel;
use App\Http\Resources\Product as ProductResource;

class Product extends Controller
{
    //

    public function index()
    {	
    	return ProductResource::collection(ProductModel::all());
    }

    public function get($id){
    	// print_r(ProductModel::find($id));exit;
    	return new ProductResource(ProductModel::find($id));
    }
}
