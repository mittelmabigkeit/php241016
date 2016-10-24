<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 24.10.2016
 * Time: 16:10
 */

require_once 'ChildOfBase.php';
$obj= new Base(2,3);
$obj -> sum();
echo $obj->res;

echo "</br>";

$obj= New ChildOfBase (2,3);
$obj -> umn();
echo $obj->res;
?>