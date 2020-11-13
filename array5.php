<!--I have a property in PHP called: rsort -->
<!-- rsort example -->
<?php
$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $value) {
  echo "$key = $value\n";
}
?>