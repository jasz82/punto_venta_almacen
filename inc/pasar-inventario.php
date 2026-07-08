<?php
/**
 * Created by PhpStorm.
 * User: juanin
 * Date: 29/04/2023
 * Time: 01:49 PM
 */
$foo = dirname(__DIR__) . "/modulos/inventario.csv";
echo $foo;
$bar = file($foo);
echo "<pre>";
var_dump($bar);