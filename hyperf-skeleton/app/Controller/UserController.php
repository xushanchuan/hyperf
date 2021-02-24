<?php


namespace App\Controller;


use App\Model\User;
use App\Service\UserService;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Logger\LoggerFactory;

class UserController extends AbstractController
{
    /**
     * 通过 `@Inject` 注解注入由 `@var` 注解声明的属性类型对象
     *
     * @Inject
     * @var UserService
     */
    private $userService;
//

//
//    public function __construct(UserService $service)
//    {
//        $this->service = $service;
//    }
//
    public function getUserById(int $userId)
    {
        $user = $this->userService->getById($userId);
        return $user;
    }
//
//    public function test()
//    {
//        return User::query()->first()->toArray();
//    }

    public function test2()
    {
        $returnData = [
            'key' => 'value'
        ];
        return $this->response->json($returnData);
    }
}