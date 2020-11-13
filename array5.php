<!--I have a property in PHP called: rsort -->
<!-- rsort example -->
<!-- $fruits = array("lemon", "orange", "banana", "apple");
// sort($fruits);
rsort($fruits);
foreach ($fruits as $key => $value) {
  echo "$key = $value\n";
} -->
<?php
$array = array('A', 'B', 'C', 'D', 'E');
sort($array); // Show array in ascending order
print_r($array);
echo '<br/>';
rsort($array); // show array in descending order
print_r($array);
?>