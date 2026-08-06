<?php


$isLogin = true;
$isAdmin = false;
$isMember = true;

var_dump($isLogin && $isAdmin);
var_dump($isLogin || $isAdmin);
var_dump($isMember && $isLogin);
var_dump(!$isAdmin);
