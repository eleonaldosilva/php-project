<?php
$file = fopen("./file.txt", "r");
$lines = 0;
fclose($file);
echo "Linhas:  " . $lines . "<br>";
