<?php  
$file_url = 'Habeeb Murtala cv.docx';  
header('Content-Type: application/octet-stream');  
header("Content-Transfer-Encoding: utf-8");   
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
$retval = readfile($file_url);  
if( $retval == true ) {
    echo "download started... you will be redirected after 5 seconds";
    header( "refresh:8;url=index.html" );
 }else {
    echo "download started... you will be redirected after 5 seconds";
    header( "refresh:8;url=index.html" );
 }
?>