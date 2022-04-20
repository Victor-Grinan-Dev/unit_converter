<html>
<link rel="stylesheet" href="style.css">
    <?php 
    // km/h to m/s

    // km/h to knots
    function kmhtok ($km) {
        return $km / 1.852;
    }

    $origkm = $_POST["kmhtok"];   
    $result06 = round(kmhtok($_POST["kmhtok"]), 2);
    ?>
    <body>        
        <!-- <?= $origkm . " Km/h are " . $result06 . " Knots."; ?><br> -->
        <p><?php echo "$origkm kilometres per hour is equivalent to $result06 knots"; ?></p>
        <a href="main.php">Go back</a>
    </body>
</html>