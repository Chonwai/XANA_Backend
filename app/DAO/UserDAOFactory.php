<?php

namespace App\DAO;

use App\DAO\BaseDAOFactory;
use App\Utils\BoltUtils;

class UserDAOFactory implements BaseDAOFactory
{
    public function getAll()
    {
        $bolt = BoltUtils::makeConnect();
        $bolt->run('MATCH (u:User) RETURN u');
        return $bolt->pull();
    }

    public function getSpecify($request)
    {
        //
    }

    public function insert($request)
    {
        $bolt = BoltUtils::makeConnect();
        $query = "CREATE (u:User {id: '$request->id', email: '$request->email', first_name: '$request->first_name', last_name: '$request->last_name', phone: '$request->phone'}) RETURN u";
        $bolt->run($query);
        return $bolt->pull();
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
