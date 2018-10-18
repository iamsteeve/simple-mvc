<?php
namespace Core;
defined("APP_PATH") OR die("Acceso a denegado");

/**
 * Class Model
 * @package Core
 */
class Model {
    protected $_db;
    public function __construct(){
        $this->_db = new Database();
    }

}