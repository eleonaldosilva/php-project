<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    section{
      max-width: 600px;
      margin: 0 auto;
    }

  </style>
</head>

<body>
  <section>
    <h1>PHP Function - parse_url()</h1>
      <?php
        $url = parse_url('https://www.fatecjales.edu.br/index.html');

        foreach ($url as $chave) {
          echo "<p>$chave</p>";
        }
      ?>
      <h2>OR</h2>
      <ul>
        <?php 
          echo "<li>Scheme: $url[scheme] </li>";
          echo "<li>Host: $url[host] </li>";
          echo "<li>Path: $url[path] </li>";
        ?>  
      </ul>
      
  </section>
</body>

</html>