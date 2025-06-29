<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Exception;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $data = Barang::all();
            return response()->json([
                "status" => true,
                "message" => "Get Successful",
                "data" => $data,
            ],200);
        }

        catch(Exception $e){
            return response()->json([
                "status" => false,
                "message" => "Something went worng",
                "data" => $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data = Barang::create($request->all());
            return response()->json([
                "status" => true,
                "message" => "Create Successful",
                "data" => $data,
            ],200);
        }
        catch(Exception $e){
            return response()->json([
                "status" => false,
                "message" => "Something went worng",
                "data" => $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $data = Barang::find($id);
            return response()->json([
                "status" => true,
                "message" => "Get Successful",
                "data" => $data,
            ],200);
        }
        catch(Exception $e){
            return response()->json([
                "status" => false,
                "message" => "Something went worng",
                "data" => $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data = Barang::find($id);
            $data->update($request->all());
            return response()->json([
                "status" => true,
                "message" => "Update Successful",
                "data" => $data,
            ],200);
        }
        catch(Exception $e){
            return response()->json([
                "status" => false,
                "message" => "Something went worng",
                "data" => $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $data = Barang::find($id);
            $data->delete();
            return response()->json([
                "status" => true,
                "message" => "Delete Successful",
                "data" => $data,
            ],200);
        }
        catch(Exception $e){
            return response()->json([
                "status" => false,
                "message" => "Something went worng",
                "data" => $e->getMessage(),
            ], 400);
        }
    }
}
