<?php

namespace App\DAO;

use App\DAO\BaseDAOFactory;
use App\Utils\BoltUtils;

class OrderDAOFactory implements BaseDAOFactory
{
    public function getAll()
    {
        $bolt = BoltUtils::makeConnect();
        $bolt->run('MATCH (o:Order) RETURN o');
        return $bolt->pull();
    }

    public function getSpecify($request)
    {
        //
    }

    public function insert($request)
    {
        $bolt = BoltUtils::makeConnect();
        $query = "CREATE (p:Order {id: '$request->id', email: '$request->email', contact_email: '$request->contact_email', phone: '$request->phone', handle: '$request->handle'}) RETURN p";
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

    public function makeRelation($request) {
        $bolt = BoltUtils::makeConnect();
        $query = "CREATE (p:Order {id: '$request->id', title: '$request->title', vendor: '$request->vendor', handle: '$request->handle'}) RETURN p";
        $bolt->run($query);
        return $bolt->pull();
    }
}
