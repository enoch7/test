<?php
$stdin = fopen('php://stdin','r');
$get = fgets($stdin);
var_dump($get);
