<?php


namespace App\Controller;


use App\Model\User;
use App\Service\UserService;
use Hyperf\Logger\LoggerFactory;

class UserController extends AbstractController
{
    private $service;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    public function __construct(UserService $service,LoggerFactory $loggerFactory)
    {
        $this->service = $service;
        $this->logger = $loggerFactory->get('log', 'default');
    }

    public function getUserById(int $userId)
    {
//        $userId = $this->request->input('user_id');
//        $this->logger->info("Your log message.");
        $this->logger->info("BBB:".$userId);
        $user = $this->service->getById($userId);

        $this->logger->info('最终返回');
        $this->logger->info(json_encode($user));
        return $this->response->json($user);
    }

    public function test()
    {
        return User::query()->first()->toArray();
    }

    public function test2()
    {
        $user = User::query()->first();
        if($user){
            return $user->toArray();
        }
        return null;
    }
}