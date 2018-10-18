<?php

namespace App\Controllers;
defined("APP_PATH") OR die("Acceso a denegado");
use Core\Controller;

/**
 * Class Tasks
 * @package App\Controllers
 */
class Tasks extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $tasks = new \App\Models\Tasks();

        $this->_view->tasks = $tasks->getAll();
        $this->_view->title = "Mira tus Tareas";
        try {
            $this->_view->render("index");
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    public function update(){
        echo "update";
    }
}