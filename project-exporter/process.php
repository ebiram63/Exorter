<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
// echo "Not submited";
    return;
}

include "Exporter/Exporter.php";
# form submit is OK
[$title,$content,$format] = [$_POST['title'],$_POST['content'],$_POST['format']];
switch($format){
    case 'text':
        Exporter::export_to_text($title,$content);
    break;
    case 'Pdf':
        Exporter::export_to_Pdf($title,$content);
    break;
    case 'Json':
        Exporter::export_to_Json($title,$content);
    break;    
}
// echo "submited";