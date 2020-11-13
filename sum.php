<!DOCTYPE html>
<html>
<body>
    <form action="sum.php" method="POST">
        <div class="container">
        <label for="n1"><b>First Number:</b></label>
        <input type="number" placeholder="First Number" min="0" name="n1" required>
        <br><br>
        <label for="n2"><b>Second Number:</b></label>
        <input type="number" placeholder="Second Number" min="0" name="n2" required>
        <br><br>
        <button type="submit">Confirm</button>
        </div>
  </form>
    <?php
        //..precauções
        $number1 = $_POST ? (int)$_POST['n1'] : 0;
        $number2 = $_POST ? (int)$_POST['n2'] : 0;
        $result = 0;

        //..realiza as operações
        $result = $number1 + $number2;

        if (strlen($result) > 80){
            echo "<h3>Result: overflow</h3>";
            $result = 0;
        }else{
            echo "<h3>Result: $result</h3>";
        }
    ?>
</body>
</html>