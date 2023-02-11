<?php
namespace App\Services\Interfaces;

interface AuthServiceInterface
{
   public function login($credentials);
   public function logout();
}