<?php
namespace Core;
defined("APP_PATH") OR die("Acceso a denegado");

/**
 * Class Model
 * @package Core
 */
class Model {
    /**
     * @var Database
     */
    protected $_db;

    /**
     * Model constructor.
     */
    public function __construct(){
        $this->_db = new Database();
    }

}