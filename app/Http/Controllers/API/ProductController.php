<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    // all product
    public function index()
    {
        $products = product::all()->toArray();
        return array_reverse($products);
    }

    // add product
    public function add(Request $request)
    {
        $products = new product([
            'Name' => $request->input('Name'),
            'Price' => $request->input('Price'),
            'UPC' => $request->input('UPC'),
            'Status' => $request->input('Status'),
        ]);
        $products->save();
 
        return response()->json('The product successfully added');
    }

    // edit product
    public function edit($id)
    {
        $products = product::find($id);
        return response()->json($products);
    }


    // update product
    public function update($id, Request $request)
    {
        $products = product::find($id);
        $products->update($request->all());
 
        return response()->json('The product successfully updated');
    }

     // delete product
    public function delete($id)
    {
        $product = product::find($id);
        $product->delete();
 
        return response()->json('The product successfully deleted');
    }

}
