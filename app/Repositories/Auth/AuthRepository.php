<?php

namespace App\Repositories\Auth;

class AuthRepository implements AuthRepositoryInterface
{    
    /**
     * login
     *
     * @param  mixed $data
     * @return void
     */
    public function login($data)
    {
        return auth()->attempt($data);
    }
}