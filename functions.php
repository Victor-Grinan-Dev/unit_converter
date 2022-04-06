<html>
    <?php 
    function ftoc ($value = 1 ):float {
        return ($value - 32) * .5556;
    }
    // celcius to fahrenheit
function ctof($value = 1):float {
    return ($value * 1.8) + 32;
}
// km/h to m/s
function  kmhtoms ($km, $h) {
    return $km * 1000 . "/". $h /3600; 
}

// km/h to knots
function kmhtok ($km, $h) {
    return $km/$h * 0.539957;
}

// kg to g 
function kgtog ($value = 1):float {
    return $value * 1000;
} 

// g to kg
function gtokg($value = 1):float {
    return $value/1000;
}

    $origF = $_POST["ftoc"];
    $origC = $_POST["ctof"];
    $origKg = $_POST["kgtog"];
    $origG = $_POST["gtokg"];


    $result01 = ftoc($_POST["ftoc"]);
    $result02 = ctof($_POST["ctof"]);
    
    $result04 = kgtog($_POST["kgtog"]);
    $result05 = gtokg($_POST["gtokg"]);


    ?>

    

<body>

  <?= $origF . " Fahrenheits in Celcius is " . $result01; ?><br>
  <?= $origC . " Celcius in Fahrenheit is " . $result02; ?><br>
  <?= $origKg . " kg in grams is " . $result04; ?><br>
  <?= $origG . " grams in kg is " . $result05; ?><br>

  <a href="main.php">Go back</a>


  

</body>

</html>