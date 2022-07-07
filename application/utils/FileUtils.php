<?php
function delFile($path){
    
}
function getRandomFileNm($fileName){
    return gen_uuid_v4() .".". getExt($fileName);  
}
function getExt($fileName){
    //$ext = explode('.', $fileName);
    //return end($ext); 
    return pathinfo($fileName, PATHINFO_EXTENSION);
    //return mb_substr($fileName, mb_strrpos($fileName, '.')); // .점까지 가져오는게 좋을때 
}

function gen_uuid_v4() { 
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x'
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0x0fff) | 0x4000
        , mt_rand(0, 0x3fff) | 0x8000
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0xffff) 
    ); 
}