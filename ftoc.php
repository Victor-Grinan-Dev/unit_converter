<html>
<link rel="stylesheet" href="style.css">
    <?php 
        function ftoc ($value = 1 ):float {
            return ($value - 32) * .5556;
        }
        $origF = $_POST["ftoc"];
        $result01 = round(ftoc($_POST["ftoc"]), 2);
    ?>
    <body>       
        <!-- <?= $origF . "°F are " . $result01 . "°C"; ?><br> -->
        <p><?php echo "$origF degrees Fahrenheit is equivalent to $result01 degrees Celsius"; ?></p>
        <a href="main.php">Go back</a>
    </body>
</html>