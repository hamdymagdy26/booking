<?php

namespace App\Services\Auth;

use App\Repositories\Auth\AuthRepositoryInterface;
use App\Traits\ResponseHandler;

class AuthService implements AuthServiceInterface
{
    use ResponseHandler;
        
    /**
     * authRepositoryInterface
     *
     * @var mixed
     */
    protected $authRepositoryInterface;
    
    public function __construct(AuthRepositoryInterface $authRepositoryInterface)
    {
        $this->authRepositoryInterface = $authRepositoryInterface;
    }    
    
    /**
     * login
     *
     * @param  mixed $data
     * @return void
     */
    public function login($data)
    {
        $token = $this->authRepositoryInterface->login($data);
        if($token) {
            return $this->successResponse('success', $token);
        };
        return $this->failResponse('error', 'Wrong credentials');
    }
}