<?php

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
     $text = fgets($fh);
     if(preg_match("/e\s?[A-Z]/",$text)){
       echo "$text";
     }
  }

?>
