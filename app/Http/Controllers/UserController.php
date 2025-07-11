<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(User::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return csrf_token();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(data: $request->all(), rules: [
            'email' => ['required', 'email'],
            'password' => 'required',
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            return response(content: "Invalid data", status: 422);
        }

        $validatedData = $validator->getData();
        $user = User::create([
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'name' => $validatedData['name'],
        ]);

        return response()->json($user, status: 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
