<?php


namespace App\Service;


use App\Model\User;
use Hyperf\Cache\Annotation\Cacheable;
use Hyperf\Logger\LoggerFactory;

class UserService
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    public function __construct(LoggerFactory $loggerFactory)
    {
        $this->logger = $loggerFactory->get('log', 'default');
    }

//    /**
//     * @Cacheable(prefix="user", ttl=300, listener="user-update")
//     * @param $userId
//     * @return array|null
//     */
//    public function getBy($userId)
//    {
//        $user = User::query()->where('id',$userId)->first();
//        if($user){
//            return $user->toArray();
//        }
//        return null;
//    }

    public function getById($userId)
    {
        $this->logger->info("CCC:".$userId);
        $user = User::query()->where('id',$userId)->first();
        $this->logger->info($user);
        if($user){
            return $user->toArray();
        }
        return null;
    }
}