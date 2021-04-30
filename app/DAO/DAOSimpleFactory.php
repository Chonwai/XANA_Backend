<?php

namespace App\DAO;

use App\DAO\UserDAOFactory;
use App\DAO\ProductDAOFactory;
use App\DAO\OrderDAOFactory;

class DAOSimpleFactory
{
    public static function createUserDAO()
    {
        return new UserDAOFactory();
    }

    public static function createProductDAO()
    {
        return new ProductDAOFactory();
    }

    public static function createOrderDAO()
    {
        return new OrderDAOFactory();
    }
}
