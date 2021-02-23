<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use Hyperf\HttpMessage\Cookie\Cookie;

class IndexController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
            'date_time' => date('Y-m-d H:i:s'),
            'rand_int' => random_int(100,999),
        ];
    }

    public function json()
    {
        $returnData = [
            'key' => 'value'
        ];
        return $this->response->json($returnData);
    }

    public function xml()
    {
        $returnData = [
            'key' => 'value'
        ];
        return $this->response->xml($returnData);
    }

    public function raw()
    {
        return $this->response->raw('hello hyperf');
    }

    public function cookie()
    {
        $cookie = new Cookie('key', 'value');
        return $this->response->withCookie($cookie)->withContent('Hello Hyperf.');
    }
}
