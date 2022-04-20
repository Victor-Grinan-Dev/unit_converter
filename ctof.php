<html>
<link rel="stylesheet" href="style.css">
    <?php 
        function ctof($value = 1):float {
            return ($value * 1.8) + 32;
        }     
        $origC = $_POST["ctof"];       
        $result02 = ctof($_POST["ctof"]);
    ?>
    <body>               
        <!-- <?= $origC . "°C are " . $result02 . "°F"; ?><br> -->
        <p> <?php echo "$origC degrees Celsius is equivalent to $result02 degrees Fahrenheit"; ?> </p>
        <a href="main.php">Go back</a>
    </body>
</html>