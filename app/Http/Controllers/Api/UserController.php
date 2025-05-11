<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController  extends Controller
{
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
            'password'     => Hash::make($validated['password']),
            'is_employer'  => $validated['is_employer'],
        ]);

        // Log the user in
        Auth::login($user);

        // Redirect based on is_employer flag
        return response()->json([
            'message' => 'Registration successful',
            'redirect_url' => $user->is_employer ? '/postJob' : '/profile'
        ]);
    }
}
