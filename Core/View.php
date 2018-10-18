<?php
namespace Core;
defined("APP_PATH") OR die("Acceso a denegado");

/**
 * Class View
 * @package Core
 */
class View
{
    private $_controller;
    public function __construct(Request $request){
        $this->_controller = $request->getController();
    }

    /**
     * @param $view
     * @param bool $item
     * @throws \Exception
     */
    public function render($view, $item = false){
        $_layoutParams = array(
            "route_css"=>APP_URL."public"."/css/",
            "route_img"=>APP_URL."public"."/img/",
            "route_js"=>APP_URL."public"."/js/"
        );

        $routeView = ROOT.DS."App".DS."Views".DS."templates".DS.$this->_controller.DS.$view.".phtml";

        if (is_readable($routeView)) {
            $routeLayout = ROOT.DS."App".DS."Views".DS."templates".DS."layouts".DS.DEFAULT_LAYOUT.DS;
            include_once($routeLayout."header.php");
            include_once($routeView);
            include_once($routeLayout."footer.php");
        } else {
            throw new \Exception("Vista no encontrada");
        }
    }
}