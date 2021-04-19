<?php

function my_autoloader($class){
    $classFile = __DIR__ . "/$class.php";
    include($classFile);
    // echo "from my-autoload => $class used\n";
}



spl_autoload_register('my_autoloader');