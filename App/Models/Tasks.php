<?php

namespace App\Models;


use App\Interfaces\CRUD;
use Core\Model;

/**
 * Class Tasks
 * @package App\Models
 */
class Tasks extends Model implements CRUD
{
    public function __construct(){

        parent::__construct();

    }
    public function getTasks(){

        $tasks = $this->_db->query("SELECT * FROM tasks");
        return $tasks->fetchall();

    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        $tasks = $this->_db->query("SELECT * FROM tasks");

        return $tasks->fetchall();
    }

    /**
     * @return mixed
     */
    public function getById()
    {
        // TODO: Implement getById() method.
    }

    /**
     * @return mixed
     */
    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * @return mixed
     */
    public function update()
    {
        // TODO: Implement update() method.
    }

    /**
     * @return mixed
     */
    public function delete()
    {
        // TODO: Implement delete() method.
    }
}