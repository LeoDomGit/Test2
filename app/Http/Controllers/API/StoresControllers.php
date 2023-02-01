<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class StoresControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allStores(Request $request,stores $stores)
    {
        $validation = Validator::make($request->all(), [
            'id'=>'required|numeric|exists:users,id', 
        ], [
            'id.required'=>'ID user is required',
            'id.numeric'=>'ID user is invalid',
            'id.exists'=>'ID user is not exist',
        ]);
        if ($validation->fails()) {
            return response()->json(['check' => false, 'message' => $validation->errors()]);
        } else {
            $result=stores::where('idUser','=',$request->id)->paginate(5);
            return response()->json($result);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Single(Request $request,stores $stores)
    {
        $validation = Validator::make($request->all(), [
            'id'=>'required|numeric|exists:stores,id', 
        ], [
            'id.required'=>'ID store is required',
            'id.numeric'=>'ID stores is invalid',
            'id.exists'=>'ID store is not exist',
        ]);
        if ($validation->fails()) {
            return response()->json(['check' => false, 'message' => $validation->errors()]);
        } else {
            $result=stores::where('id','=',$request->id)->paginate(5);
            return response()->json($result);
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,stores $stores)
    {
        $validation = Validator::make($request->all(), [
            'name'=>'required|unique:stores,name', 
            'idUser'=>'required|numeric|exists:users,id', 

        ], [
            'name.required'=>'Storage name is required',
            'name.unique'=>'Storage name is exists',
            'idUser.required'=>'idUser is required',
            'idUser.numeric'=>'idUser is invalid',
            'idUser.exists'=>'idUser is not exist',
        ]);
        if ($validation->fails()) {
            return response()->json(['check' => false, 'message' => $validation->errors()]);
        } else {
            stores::create(['name'=>$request->name,'idUser'=>$request->idUser]);
            return response()->json(['check'=>true, 'message'=>'Created Store']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stores  $stores
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,stores $stores)
    {
        $validation = Validator::make($request->all(), [
            'id'=>'required|numeric|exists:stores,id', 
            'name'=>'required|unique:stores,name', 
            'idUser'=>'required|numeric|exists:users,id', 

        ], [
            'id.required'=>'ID store is required',
            'id.numeric'=>'ID store is invalid',
            'id.exists'=>'ID store is not exist',
            'name.required'=>'Storage name is required',
            'name.unique'=>'Storage name is exists',
            'idUser.required'=>'idUser is required',
            'idUser.numeric'=>'idUser is invalid',
            'idUser.exists'=>'idUser is not exist',
        ]);
        if ($validation->fails()) {
            return response()->json(['check' => false, 'message' => $validation->errors()]);
        } else {
            stores::where('id','=',$request->id)->update(['name'=>$request->name,'idUser'=>$request->idUser,'updated_at'=>now()]);
            return response()->json(['check'=>true, 'message'=>'Updated Store']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stores  $stores
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,stores $stores)
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
            stores::where('id','=',$request->id)->delete();
            return response()->json(['check'=>true, 'message'=>'Delete Store']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stores  $stores
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stores  $stores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stores $stores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stores  $stores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,stores $stores)
    {
        //
    }
}
