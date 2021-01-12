<?php

namespace App\Repositories\Contracts;

interface UserRepositoryInterface
{
    public function Register(array $data);
    public function Auth(array $data);
}
