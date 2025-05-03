<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // List all users
    public function index()
    {
        $users = User::all();

        return response()->json([
            'message' => 'Users fetched successfully.',
            'users' => $users
        ]);
    }

    // Store new user
    public function store(StoreUserRequest $request)
    {
        // Get validated data from the request
        $validated = $request->validated();

        // Create a new user
        $user = User::create([
            'first_name'   => $validated['first_name'],
            'last_name'    => $validated['last_name'],
            'email'        => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'password'     => Hash::make($validated['password']), // Always hash passwords
            'is_employer'  => $validated['is_employer'],
        ]);

        return response()->json([
            'message' => 'User created successfully.',
            'user'    => $user
        ], 201);
    }
}
