<!DOCTYPE html>
<header>
    <title>Exercise 2 - Loop</title>
</header>
<html>
<body>
    <?php
        
        $min = 1;     //..menor numero
        $max = 10;     //..maior numero
         //..variaveis padroes
         $p = 1;
        
         echo "<h2>Numbers from $min to $max : <p>";
 
         for ($i=$min; $i <= $max; $i++) { 
            
            if ($p < $max){
                echo "$i - ";
                $p++;
 
            } else{
                echo "$i ";
                $p++;
            }
 
        }
 
        echo "</p></h2>";
 
    ?>
 
</body>
</html>