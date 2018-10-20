<?php
/**
 * Created by PhpStorm.
 * User: steveklockow
 * Date: 16.10.18
 * Time: 09:36
 */
include 'ConnectToDb.php';

class Output extends ConnectToDb
{
    public $sql;

    public function outPut22()
    {
        $this->sql = "SELECT * FROM `ToDoList` ORDER BY `ToDoList`.`id` DESC";
        $todoList = array();
        foreach ($this->connection->query($this->sql) as $row) {
            $todoList['id-'.$row['id']] = $row['ToDo'];

        }

        return $todoList;

    }
}



$out = new Output();
echo json_encode($out->outPut22());
