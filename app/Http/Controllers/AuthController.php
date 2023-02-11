<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\AuthServiceInterface;

class AuthController extends Controller
{

    private $AuthService;

    public function __construct(AuthServiceInterface $AuthService)
    {
        $this->AuthService = $AuthService;
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        return $this->AuthService->login($credentials);
       
    }


    public function logout()
    {
        return $this->AuthService->logout();
    }
}
