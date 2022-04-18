<html>
<link rel="stylesheet" href="style.css">
    <?php 
        function ftoc ($value = 1 ):float {
            return ($value - 32) * .5556;
        }
        $origF = $_POST["ftoc"];
        $result01 = ftoc($_POST["ftoc"]);
    ?>
    <body>       
        <?= $origF . "°F are " . $result01 . "°C"; ?><br>
        <a href="main.php">Go back</a>
    </body>
</html>