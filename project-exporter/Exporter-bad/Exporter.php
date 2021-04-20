<?php

class Exporter{

    public static function export_to_text($title,$content){
        echo "Export to Text [$title,$content]\n ";
    }
    public static function export_to_Pdf($title,$content){
        echo "Export to Pdf [$title,$content]\n ";
    }
    public static function export_to_Json($title,$content){
        echo "Export to Json [$title,$content]\n ";
    }
}