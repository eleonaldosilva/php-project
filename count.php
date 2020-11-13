<?php
// create a variable that fetches the file with fopen
$file = fopen("./file.txt", "r");

//I started a variable to take count of the lines and characters
$lines = 0;

//make a loop to go through the file's lines to the end of it
while (!feof($file)) {
  //if extract a line from the file and it is not false
  if ($line = fgets($file)) {
    //accumulate one in the variable number of lines
    $lines++;
  }
}
fclose($file);

echo "This algorithm will count the file's lines, and after, will show on the screen the amount of lines!";

echo "Lines:  " . $lines;
