<!--I have a property in PHP called: rsort -->
<!-- rsort example -->
<?php
$frutas = array("limao", "laranja", "banana", "maçã");
rsort($frutas);
foreach ($frutas as $chave => $valor) {
  echo "$chave = $valor\n";
}
?>