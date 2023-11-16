<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Http\Resources\v1\registerResource;
use Symfony\Component\HttpFoundation\Response;


class register_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers = Register::all();

        return response()->json([
            'status' => Response::HTTP_OK,
            'data' =>  registerResource::collection($registers),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(register $register)
    {
        return new registerResource($register);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(register $register)
    {
        //
    }
}
