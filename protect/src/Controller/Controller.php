<?php

class Controller{
    public function  render(string $view) {
        require dirname(__FILE__) . "/../../View/$view";
    }
}