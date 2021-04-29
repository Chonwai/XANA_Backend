<?php

namespace App\Utils;

use Bolt\Bolt;

class BoltUtils
{
    public static function makeConnect()
    {
        // $bolt = new Bolt($ip = env('NEO4J_HOST'), $port = env('NEO4J_PORT'), $timeout = 120);
        // $bolt->setProtocolVersions(4.1);
        // $bolt->init(env('NEO4J_DATABASE'), env('NEO4J_USERNAME'), env('NEO4J_PASSWORD'));
        // Create new Bolt instance
        $bolt = new Bolt(new \Bolt\connection\StreamSocket());
        // Set Bolt protocol version if needed
        $bolt->setProtocolVersions(4.1);
        // Connect to database
        $bolt->init(env('NEO4J_DATABASE'), env('NEO4J_USERNAME'), env('NEO4J_PASSWORD'));
        return $bolt;
    }
}
