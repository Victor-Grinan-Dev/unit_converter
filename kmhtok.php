<html>
<link rel="stylesheet" href="style.css">
    <?php 
    // km/h to m/s

    // km/h to knots
    function kmhtok ($km) {
        return $km / 1.852;
    }

    $origkm = $_POST["kmhtok"];   
    $result06 = kmhtok($_POST["kmhtok"]);
    ?>
    <body>        
        <?= $origkm . " Km/h are " . $result06 . " Knots."; ?><br>
        <a href="main.php">Go back</a>
    </body>
</html>