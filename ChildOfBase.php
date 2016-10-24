<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 24.10.2016
 * Time: 16:03
 */

require_once 'Base.php';

class ChildOfBase extends Base {

    public function __construct ($a,$b){
        $this -> a = $a;
        $this -> b = $b;
    }
    function umn () {
        $this ->res = $this ->a* $this ->b;

    }
};
?>