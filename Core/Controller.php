<?php
namespace Core;
defined("APP_PATH") OR die("Acceso a denegado");

/**
 * Class Controller
 * @package Core
 */
abstract class Controller {
    protected $_view;

    public function __construct(){
        $this->_view = new View(new Request());
    }
    abstract function index();

}