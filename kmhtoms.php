<html>
<link rel="stylesheet" href="style.css">
    <?php 
    // km/h to m/s
    function  kmhtoms ($km) {
        return $km / 3.6; 
    }

    $origkm =  $_POST["kmhtoms"];
    $result03 = kmhtoms($_POST["kmhtoms"]);

    ?>
    <body>        
        <?= $origkm . " Km/h are " . $result03 . " m/s."; ?><br>
        <a href="main.php">Go back</a>
    </body>
</html>