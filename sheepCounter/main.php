<?php

include "sheep.php";




for($i=0;$i<rand(1,50);$i++){
    $s = new sheep();
    $s->baaa();
}

echo sheep::getCount();