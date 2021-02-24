<?php


namespace App\Controller;


use App\Model\User;
use App\Service\UserService;
use Hyperf\Logger\LoggerFactory;

class UserController extends AbstractController
{
    private $service;
//
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;
//
    public function __construct(UserService $service,LoggerFactory $loggerFactory)
    {
        $this->service = $service;
        $this->logger = $loggerFactory->get('log', 'default');
    }
//
//    public function getUserById(int $userId)
//    {
//        $user = $this->service->getById($userId);
//        return $user;
//    }
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