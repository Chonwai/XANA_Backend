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
        $query = "CREATE (o:Order {id: '$request->id', email: '$request->email', contact_email: '$request->contact_email', phone: '$request->phone', handle: '$request->handle', items: '" . json_encode($request->line_items) . "'}) RETURN o";
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

    public function makeUserRelation($request)
    {
        //
    }

    public function makeProductRelation($request)
    {
        //
    }

    public function makeRelation($user_id, $product_id, $order_id)
    {
        echo($user_id . ', ' . $product_id . ', ' . $order_id);
        $bolt = BoltUtils::makeConnect();
        $query = "MATCH (u:User),(p:Product),(o:Order) WHERE u.id='$user_id' AND p.id='$product_id' AND o.id='$order_id' CREATE (o)-[r0:Order_By]->(u)-[r1:Bought]->(p)-[r2:Record_By]->(o) RETURN r0,r1,r2";
        $bolt->run($query);
        return $bolt->pull();
    }
}
