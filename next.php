<?php
$file=fopen("hello.txt","a");
fwrite($file,"\nhello this is second file");
fclose($file);


?>