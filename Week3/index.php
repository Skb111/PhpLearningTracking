<?php
/** require / require_once / include / include_once */

$x = 5;

require 'file.php';

echo $x . '<br/>';

require 'file.php';

echo $x . '<br/>';

// include_path

echo 'Hello World!';