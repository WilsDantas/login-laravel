<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\UserService;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(StoreUserRequest $request){
        if(!$user = $this->userService->register($request->all())){
            return response()->json(['message' => 'Falha ao Tentar Cadastrar Usuário']);
        }
        return new UserResource($user);

    }
}
