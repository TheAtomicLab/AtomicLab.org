<?php

$locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if(file_exists(__DIR__ . "$locale")){
    include (__DIR__ . "$locale");
	
} else {
    include (__DIR__ . "en");
}

?>