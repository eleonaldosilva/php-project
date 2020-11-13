<!DOCTYPE html>
<header>
    <title>Array 4</title>
</header>
<html>
<body>
<container>
    <?php
        //..enunciado
        /*..Write a PHP script named array4.php which displays all the numbers between 200 and 250 that are divisible by 4. 
            Do not use any PHP control statement.*/
        
        //..variaveis versateis
        $num= 4;        //..divisor desejado
        $min = 200;     //..menor numero
        $max = 250;     //..maior numero

        //..variaveis padroes
        $divisible = array();
        $p = 0;
        
        //..operacoes
        echo "<h2>Numbers divisible by $num, between $min and $max: <p>";
        for ($i=$min; $i <= $max; $i++) { 
            if ($i%$num == 0){
                $divisible[$p] = $i;
                echo "$divisible[$p], ";
                $p++;
            }
            
        }
        echo "</p></h2>";

        //..para visualizar o vetor
        //var_dump($divisible);
    ?>
</container>
</body>
</html>