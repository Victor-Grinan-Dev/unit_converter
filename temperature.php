<html>
    <?php 
        function ftoc ($value = 1 ):float {
            return ($value - 32) * .5556;
        }
            // celcius to fahrenheit
        function ctof($value = 1):float {
            return ($value * 1.8) + 32;
        }
        $origF = $_POST["ftoc"];
        $origC = $_POST["ctof"];
        $result01 = ftoc($_POST["ftoc"]);
        $result02 = ctof($_POST["ctof"]);
    ?>
    <body>       
        <?= $origF . " Fahrenheits in Celcius is " . $result01; ?><br>
        <?= $origC . " Celcius in Fahrenheit is " . $result02; ?><br>
        <a href="main.php">Go back</a>
    </body>
</html>