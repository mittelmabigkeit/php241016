<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 24.10.2016
 * Time: 16:03
 */

require_once 'Base.php';

class ChildOfBase extends Base {

    function umn () {
        $this -> res = $this -> a * $this -> b;

    }
};
?>