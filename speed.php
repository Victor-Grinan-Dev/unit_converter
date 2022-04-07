<html>
    <?php 
    // km/h to m/s
    function  kmhtoms ($km) {
        return $km / 3.6; 
    }
    // km/h to knots
    function kmhtok ($km) {
        return $km / 1.852;
    }
    $origkmms =  $_POST["kmhtoms"];
    $origkmk = $_POST["kmhtok"];   
    $result03 = kmhtoms($_POST["kmhtoms"]);
    $result06 = kmhtoms($_POST["kmhtok"]);
    ?>
    <body>        
        <?= $origkmms . " Kilometers per Hour to Meters per Seconds is " . $result03; ?><br>
        <?= $origkmk. " Kilometers per Hour to Knots is " . $result06; ?><br>
        <a href="main.php">Go back</a>
    </body>
</html>