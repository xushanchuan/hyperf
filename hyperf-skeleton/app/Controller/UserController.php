<?php


namespace App\Controller;


use App\Model\User;
use App\Service\UserService;

class UserController extends AbstractController
{
    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function getUserById($userId)
    {
//        $userId = $this->request->input('user_id');
        $user = $this->service->getById($userId);
        return $this->response->json($user);
    }

    public function test()
    {
        return User::query()->first()->toArray();
    }
}