<?php

namespace Anarr\GrpcClient;

class Index
{
    public function message($name = 'guest')
    {
        return "Hello {$name}";
    }
}

