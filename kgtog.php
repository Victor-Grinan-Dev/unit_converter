<html>
    <link rel="stylesheet" href="style.css">
    <?php 
    function kgtog ($value = 1):float {
        return $value * 1000;
    } 
    $origKg = $_POST["kgtog"];
    $result04 = kgtog($_POST["kgtog"]);;
    ?>
    <body>    
        <?= $origKg . " kg are " . $result04 . "g."; ?><br>
        <a href="main.php">Go back</a>
    </body>
</html>