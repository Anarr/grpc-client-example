<?php

namespace Anarr\GrpcClient\GrpcClient;

class Client
{
    public function message($user = 'guest')
    {
        echo "welcome {$user}" ;
    }

    public function connect($host, $port)
    {
        $sockerHandler = fsockopen($host, $port);
    }
}