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

    public function Auth(array $data){
        return $this->userRepository->Auth($data);
    }

    public function GetMe(){
        return $this->userRepository->GetMe();
    }
}