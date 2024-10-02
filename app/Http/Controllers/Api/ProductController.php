<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\productResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Rules\Exists;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        if ($products->count()) {
            return response()->json([
                "products" => productResource::collection($products),
            ], 201);
        }
        return response()->json([
            "message" => "no products yet .",
        ], 203);
    }


  


    public function store(Request $request)
    {
        $this->validationFun($request);

        $product = Product::create([
            'title' => $request->title,
            'discription' => $request->discription,
            'price' => $request->price,
        ]);
        return response()->json([
            "message" => "product created successfully",
            "product" => new productResource($product),
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show( Product $product)
    {

            return response()->json([
                "product" => new productResource($product),
            ], 200);

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->validationFun($request);
        $product->update([
            'title' => $request->title,
            'discription' => $request->discription,
            'price' => $request->price,
        ]);
        return response()->json([
            "message" => "product updated successfully",
            "product" => new productResource($product),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            "message" => "product Delated successfully",
        ], 200);
    }
    public function validationFun($request)
    {
        $validator = FacadesValidator::make($request->all(), [
            'title' => "required|string",
            'discription' => "required",
            'price' => "required",
        ]);
        if ($validator->fails()) {
            return response()->json([
                "messages" => $validator->messages(),
            ], 422);
        }
    }
}
