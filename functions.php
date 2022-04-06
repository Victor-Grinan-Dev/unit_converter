<html>
    <?php 
    function ftoc ($value):float {
        return ($value - 32) * .5556;
    }
    // celcius to fahrenheit
function ctof($value):float {
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
function kgtog ($value):float {
    return $value * 1000;
} 
// g to kg
function gtokg($value):float {
    return $value/1000;
}

    $result01 = ftoc($_POST["ftoc"]);
    $result02 = ctof($_POST["ctof"]);

    ?>

    

<body>

  Fahrenheits in Celcius is <?php echo $result01; ?><br>
  Celcius in Fahrenheits is <?php echo $result02; ?><br>


  

</body>

</html>