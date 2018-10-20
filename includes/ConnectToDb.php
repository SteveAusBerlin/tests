<?php
/**
 * Created by PhpStorm.
 * User: steveklockow
 * Date: 15.10.18
 * Time: 23:01
 */

class ConnectToDb
{
    private $user = "root";
    private $password = "root";

    public function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=ravi-php', $this->user, $this->password);
    }
    /*public function closeConnection()
    {
        $this->connection->commit();
    }

    public function __destruct()
    {
        $this->closeConnection();
    }*/
}
$connection = new ConnectToDb();
