<?php
namespace Core;
defined("APP_PATH") OR die("Acceso a denegado");

/**
 * Class Controller
 * @package Core
 */
abstract class Controller {

    /**
     * @var View
     */
    protected $_view;

    /**
     * Controller constructor.
     */
    public function __construct(){
        $this->_view = new View(new Request());
    }

    /**
     * @return mixed
     */
    abstract function index();

}