<?php
function createFolder($url){
    if (!file_exists($url)) {
        exec("mkdir $url");
        exec("chmod -R 777 $url");
    }
    else {
        exec("rm -rf $url/*");
    }
}

function downloadFile($url,$target){
    exec("wget $url -P $target");
}

function unzipAll($url,$target){
    exec("unzip $url/*.zip -d $target");
}