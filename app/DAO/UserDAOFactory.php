<?php

namespace App\DAO;

use App\DAO\BaseDAOFactory;
use App\Utils\BoltUtils;

class UserDAOFactory implements BaseDAOFactory
{
    public function getAll()
    {
        $bolt = BoltUtils::makeConnect();
        $bolt->run('MATCH (n:User) RETURN n');
        return $bolt->pull();
    }

    public function getSpecify($request)
    {
        // 
    }

    public function insert($request)
    {
        //
    }

    public function delete($request)
    {
        //
    }

    public function update($request)
    {
        //
    }

    public function countAll()
    {
        //
    }
}
