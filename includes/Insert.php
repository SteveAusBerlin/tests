<?php

include "ConnectToDb.php";

class Insert extends ConnectToDb
{
    public $todo;
    public $sql;

    public function __construct()
    {
        parent::__construct();
        $this->todo = $_POST['todo'];
    }

    public function createInput()
    {
        $this->sql = "INSERT INTO `ToDoList`(`ToDo`) VALUES ('$this->todo')";
        $this->connection->exec($this->sql);
    }
}

$model = new Insert();
$model->createInput();
echo 'succes';