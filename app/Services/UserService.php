<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserService{
    
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function Register(array $data){
        return $this->userRepository->Register($data);
    }
}