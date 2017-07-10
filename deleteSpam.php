<?php
/**
 * Created by Magicode.
 * Creators: Morteza Bagheri & Mahdi Bagheri
 * Start Code Date: 6/17/2017
 * Start Code Time: 10:34 AM
 */

$time = date("H");
if($time == "00") {
    $dir = new DirectoryIterator("users");
    foreach ($dir as $fileinfo) {
//    if ($fileinfo->isDir() && !$fileinfo->isDot()) {
//        if(preg_match_all('/^(conut)/',$fileinfo->getFilename())) {
            file_put_contents("users/" . $fileinfo->getFilename(), 0);
            echo $fileinfo->getFilename() . "<br>";
//        }
//    }
    }
} else {
    echo $time;
}