<?php
$fp=fopen("counter.txt","r");
$count=fread($fp,1024);
fclose($fp);
$count=$count+1;
echo "<p>page views:" .$count. "</p>";
$fp=fopen("counter.txt","w");
fwrite($fp,$count);
fclose($fp);
?>