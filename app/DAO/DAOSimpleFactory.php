<?php

namespace App\DAO;

use App\DAO\UserDAOFactory;

class DAOSimpleFactory
{
    public static function createUserDAO()
    {
        return new UserDAOFactory();
    }
}
