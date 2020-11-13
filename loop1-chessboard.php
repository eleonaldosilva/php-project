<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chess Board</title>
  <style>
    *{
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    table{
      width: 270px;
      border: 1px solid black;
    }
    td{
      width: 30px;
      height: 30px;
      border: 1px solid black;
    }
    .preto{
      background-color: black;
    }
    .branco{
      background-color: white;
    }
  </style>
</head>
<body>
  <h1>Chess Board PHP</h1>
  <table>
    <?php
      for ($i=0; $i < 8; $i++) { 
        echo "<tr>";
        for($j = 0; $j < 8; $j++){
          if($j % 2 <= 0){
            echo "<td class='preto'></td>";
          }
          else{
            echo "<td class='branco'></td>";
          }
        }
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>