<html>
    <?php 
    // kg to g 
    function kgtog ($value = 1):float {
        return $value * 1000;
    } 
    // g to kg
    function gtokg($value = 1):float {
        return $value/1000;
    }
    $origKg = $_POST["kgtog"];
    $origG = $_POST["gtokg"];
    $result04 = kgtog($_POST["kgtog"]);
    $result05 = gtokg($_POST["gtokg"]);
    ?>
    <body>    
        <?= $origKg . " kg in grams is " . $result04; ?><br>
        <?= $origG . " grams in kg is " . $result05; ?><br>
        <a href="main.php">Go back</a>
    </body>
</html>