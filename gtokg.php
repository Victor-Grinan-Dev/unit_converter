<html>
    <link rel="stylesheet" href="style.css">
    <?php 
    function gtokg($value = 1):float {
        return $value/1000;
    }
    $origG = $_POST["gtokg"];
    $result05 = gtokg($_POST["gtokg"]);
    ?>
    <body>    
        <!-- <?= $origG . " g are" . $result05 . "Kg."; ?><br> -->
        <p><?php echo "$origG grams is equivalent to $result05 kilograms"; ?></p>
        <a href="main.php">Go back</a>
    </body>
</html>