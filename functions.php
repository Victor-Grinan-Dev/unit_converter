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
function  kmhtoms ($km) {
    return $km / 3.6; 
}

// km/h to knots
function kmhtok ($km) {
    return $km / 1.852;
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