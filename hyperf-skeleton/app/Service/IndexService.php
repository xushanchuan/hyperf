<?php


namespace App\Service;


use App\Model\User;
use Hyperf\Cache\Annotation\Cacheable;

class IndexService
{
    /**
     * @Cacheable(prefix="user", ttl=300, listener="user-update")
     * @param $userId
     * @return array|null
     */
    public function getBy($userId)
    {
        $user = User::query()->where('id',$userId)->first();

        if($user){
            return $user->toArray();
        }

        return null;
    }
}