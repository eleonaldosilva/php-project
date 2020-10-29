<?php
// create a variable that fetches the file with fopen
$file = fopen("./file.txt", "r");

//I start a variable to take account of the lines
$lines = 0;

//make a loop to go through the file line by line to the end of the file
while (!feof($file)) {
  //if extract a line from the file and it is not false
  if ($line = fgets($file)) {
    //accumulate one in the variable number of lines
    $lines++;
  }
}
fclose($file);
echo "Linhas:  " . $lines . "<br>";
