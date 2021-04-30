<?php

namespace App\DAO;

use App\DAO\BaseDAOFactory;
use App\Utils\BoltUtils;

class ProductDAOFactory implements BaseDAOFactory
{
    public function getAll()
    {
        $bolt = BoltUtils::makeConnect();
        $bolt->run('MATCH (p:Product) RETURN p');
        return $bolt->pull();
    }

    public function getSpecify($request)
    {
        //
    }

    public function insert($request)
    {
        $bolt = BoltUtils::makeConnect();
        $query = "CREATE (p:Product {id: '$request->id', title: '$request->title', vendor: '$request->vendor', handle: '$request->handle'}) RETURN p";
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
