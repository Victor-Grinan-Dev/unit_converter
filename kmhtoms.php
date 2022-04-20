<html>
<link rel="stylesheet" href="style.css">
    <?php 
    // km/h to m/s
    function  kmhtoms ($km) {
        return $km / 3.6; 
    }

    $origkm =  $_POST["kmhtoms"];
    $result03 = round(kmhtoms($_POST["kmhtoms"]), 2);

    ?>
    <body>        
        <!-- <?= $origkm . " Km/h are " . $result03 . " m/s."; ?><br> -->
        <p><?php echo "$origkm kilometres per hour is equivalent to $result03 metres per second"; ?></p>
        <a href="main.php">Go back</a>
    </body>
</html>