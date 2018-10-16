<?php

class TasksController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $tasks = $this->loadModel("Task");
        $this->_view->tasks = $tasks->getTasks();


        $this->_view->title = "Mira tus Tareas";
        $this->_view->render("index");

    }


    function update(){
        //TODO: Update View
    }

    function delete(){
        //TODO:Delete View
    }

    function add(){
        // TODO: Add

        $this->_view->title = "Crear Tarea";
        $this->_view->render("add");
    }

}