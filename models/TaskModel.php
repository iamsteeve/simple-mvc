<?php


class TaskModel extends AppModel
{
    public function __construct(){

        parent::__construct();

    }

    public function getTasks(){

        $tasks = $this->_db->query("SELECT * FROM tasks");

        return $tasks->fetchall();

    }

    public function getTask($id){

    }

    public function createTask(){

    }

}