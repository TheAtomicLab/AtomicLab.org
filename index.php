<?php

$locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if(file_exists(__DIR__ . "/index_$locale.html")){
    include (__DIR__ . "/index_$locale.html");
	
} else {
    include (__DIR__ . "/index_es.html");
}

?>