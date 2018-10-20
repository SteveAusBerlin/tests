<?php
/**
 * Created by PhpStorm.
 * User: steveklockow
 * Date: 16.10.18
 * Time: 10:53
 */

class DeletTask
{
    public $todo;
    public $sql;

    public function __construct()
    {
        parent::__construct();
        $this->todo = $_POST['todo'];
    }

    public function delete()
    {
        $this->sql = "DELETE FROM `ToDoList` WHERE `id` = '$this->todo'";
    }
}

if ($_POST['action'] == 'Update') {
    //action for update here
} else if ($_POST['action'] == 'Delete') {
    //action for delete
} else {
    //invalid action!
}