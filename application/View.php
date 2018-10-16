<?php

class View
{
    private $_controller;
    public function __construct(Request $request){
        $this->_controller = $request->getController();
    }
    public function render($view, $item = false){
        $_layoutParams = array(
            "route_css"=>APP_URL."views/layouts/".DEFAULT_LAYOUT."/css/",
            "route_img"=>APP_URL."views/layouts/".DEFAULT_LAYOUT."/img/",
            "route_js"=>APP_URL."views/layouts/".DEFAULT_LAYOUT."/js/"
        );

        $routeView = ROOT."views".DS.$this->_controller.DS.$view.".phtml";

        if (is_readable($routeView)) {
            include_once(ROOT."views".DS."layouts".DS.DEFAULT_LAYOUT.DS."header.php");
            include_once($routeView);
            include_once(ROOT."views".DS."layouts".DS.DEFAULT_LAYOUT.DS."footer.php");
        } else {
            throw new Exception("Vista no encontrada");
        }
    }
}