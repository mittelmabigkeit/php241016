<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 24.10.2016
 * Time: 16:10
 */

require_once 'ChildOfBase.php';
$obj= New Base (2,3);
echo $obj -> sum();
echo "</br>";
$obj= New ChildOfBase (2,3);
echo $obj -> umn();
?>