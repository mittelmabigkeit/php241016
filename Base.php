<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 24.10.2016
 * Time: 15:59
 */

class Base {
    public $a, $b, $res;

    public function __construct ($a,$b){
        $this -> a = $a;
        $this -> b = $b;
    }
    function sum () {
        $this ->res = $this ->a+ $this ->b;

    }
};
?>