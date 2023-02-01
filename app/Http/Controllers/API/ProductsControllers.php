<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ProductsControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allProducts(Request $request,products $products)
    {
        $validation = Validator::make($request->all(), [
            'id'=>'required|numeric|exists:stores,id', 
        ], [
            'id.required'=>'ID store is required',
            'id.numeric'=>'ID store is invalid',
            'id.exists'=>'ID store is not exist',
        ]);
        if ($validation->fails()) {
            return response()->json(['check' => false, 'message' => $validation->errors()]);
        } else {
            $result=products::where('idStore','=',$request->id)->paginate(5);
            return response()->json($result);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Single(Request $request,products $products)
    {
        $validation = Validator::make($request->all(), [
            'id'=>'required|numeric|exists:products,id', 
        ], [
            'id.required'=>'ID product is required',
            'id.numeric'=>'ID product is invalid',
            'id.exists'=>'ID product is not exist',
        ]);
        if ($validation->fails()) {
            return response()->json(['check' => false, 'message' => $validation->errors()]);
        } else {
            $result=products::where('id','=',$request->id)->paginate(5);
            return response()->json($result);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchProd(Request $request,products $products)
    {
        $validation = Validator::make($request->all(), [
            'name'=>'required|exists:products,name', 
        ], [
            'name.required'=>'Product name is required',
            'name.exists'=>'Product name is not exist',
        ]);
        if ($validation->fails()) {
            return response()->json(['check' => false, 'message' => $validation->errors()]);
        } else {
            $result=products::where('name', 'like', '%' . $request->name . '%')->paginate(5);
            return response()->json($result);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,products $products)
    {
        $validation = Validator::make($request->all(), [
            'name'=>'required|unique:products,name', 
            'idStore'=>'required|numeric|exists:stores,id', 
            'price'=>'required|numeric|min:0', 
            'status'=>'required|numeric|min:0|max:1',
        ], [
            'name.required'=>'Product name is required',
            'name.unique'=>'Product name already added',
            'idStore.required'=>'ID Store is required',
            'idStore.numeric'=>'ID Store is invalid',
            'idStore.exists'=>'ID Store does not exist',
            'price.required'=>'Price is required',
            'price.numeric'=>'Price is invalid',
            'price.min'=>'Price is invalid (<0)',
            'status.required'=>'Status is required',
            'status.required'=>'Status is required',
            'status.numeric'=>'Status is invalid',
            'status.min'=>'Status is invalid( 0 or 1)',
            'status.max'=>'Status is invalid( 0 or 1)',
        ]);
        if ($validation->fails()) {
            return response()->json(['check' => false, 'message' => $validation->errors()]);
        } else {
            products::create(['name'=>$request->name,'price'=>$request->price,'idStore'=>$request->idStore,'status'=>$request->status]);
            return response()->json(['check'=>true,'message'=>'Created']);
        }
    }
/**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,products $products)
    {
        $validation = Validator::make($request->all(), [
            'id'=>'required|numeric|exists:products,id', 
            'name'=>'required|unique:products,name', 
            'idStore'=>'required|numeric|exists:stores,id', 
            'price'=>'required|numeric|min:0', 
            'status'=>'required|numeric|min:0|max:1',

        ], [
            'id.required'=>'ID Product is required',
            'id.numeric'=>'ID Product is invalid',
            'id.exists'=>'ID Product does not exist',
            'name.required'=>'Product name is required',
            'name.unique'=>'Product name already added',
            'idStore.required'=>'ID Store is required',
            'idStore.numeric'=>'ID Store is invalid',
            'idStore.exists'=>'ID Store does not exist',
            'price.required'=>'Price is required',
            'price.numeric'=>'Price is invalid',
            'price.min'=>'Price is invalid (<0)',
            'status.required'=>'Status is required',
            'status.required'=>'Status is required',
            'status.numeric'=>'Status is invalid',
            'status.min'=>'Status is invalid( 0 or 1)',
            'status.max'=>'Status is invalid( 0 or 1)',
        ]);
        if ($validation->fails()) {
            return response()->json(['check' => false, 'message' => $validation->errors()]);
        } else {
            products::where('id','=',$request->id)->update(['name'=>$request->name,'price'=>$request->price,'idStore'=>$request->idStore,'status'=>$request->status,'updated_at'=>now()]);
            return response()->json(['check'=>true,'message'=>'Updated']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,products $products)
    {
        $validation = Validator::make($request->all(), [
            'id'=>'required|numeric|exists:products,id', 
        ], [
            'id.required'=>'ID Product is required',
            'id.numeric'=>'ID Product is invalid',
            'id.exists'=>'ID Product does not exist',
        ]);
        if ($validation->fails()) {
            return response()->json(['check' => false, 'message' => $validation->errors()]);
        } else {
            products::where('id','=',$request->id)->delete();
            return response()->json(['check'=>true,'message'=>'Deleted']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}
