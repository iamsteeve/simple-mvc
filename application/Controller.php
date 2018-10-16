<?php

abstract class AppController {
    protected $_view;
    public function __construct(){
        $this->_view = new View(new Request);
    }
    abstract function index();
    protected function loadModel($model) {
        $model = $model."Model";
        $routeModel = ROOT."models".DS.$model.".php";
        if (is_readable($routeModel)) {
            require_once($routeModel);
            $model = new $model;
            return $model;
        } else {
            throw new Exception("Error in load of Model");
        }
    }
}