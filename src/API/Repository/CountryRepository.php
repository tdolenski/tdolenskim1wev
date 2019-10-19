<?php
/**
 * Created by PhpStorm.
 * User: gael
 * Date: 18/10/2019
 * Time: 16:40
 */

namespace App\API\Repository;

use App\API\Core\Database;

class CountryRepository
{
    private $database;
    private $connection;

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->connection = $this->database->connect();
    }

    public function findAll():array
    {
        $sql = "
			SELECT country.*
			FROM destination.country;
		";
        $query = $this->connection->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(\PDO::FETCH_CLASS, 'App\API\Entity\Country');
        return  $results;
    }
}


