<?php

require_once 'vendor/autoload.php';

use function func\getDifferenceInList;

var_dump( getDifferenceInList('1', 'a') ); // 2
var_dump( getDifferenceInList('11', 'aa') ); // 4
var_dump( getDifferenceInList('11', '1ab') ); // 1