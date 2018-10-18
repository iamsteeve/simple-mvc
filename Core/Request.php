<?php

namespace Core;
defined("APP_PATH") OR die("Acceso a denegado");

/**
 * Class Request
 * @package Core
 */
class Request {

    /**
     * @var string
     */
    private $_controller;

    /**
     * @var string
     */
    private $_method;
    /**
     * @var array
     */
    private $_args;

    /**
     *
     * Request constructor.
     */
    public function __construct(){
        if (isset($_GET['url'])) {

            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            $url = array_filter($url);
            $this->_controller = strtolower(array_shift($url));
            $this->_method = strtolower(array_shift($url));
            $this->_args = $url;

        }
        if (!$this->_controller) {
            $this->_controller = DEFAULT_CONTROLLER;
        }
        if (!$this->_method) {
            $this->_method = "index";
        }
        if (!$this->_args) {
            $this->_args = array();
        }
    }

    /**
     * @return string
     */
    public function getController(){
        return $this->_controller;
    }

    /**
     * @return string
     */
    public function getMethod(){
        return $this->_method;
    }

    /**
     * @return array
     */
    public function getArgs(){
        return $this->_args;
    }
}