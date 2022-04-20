<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Measurement Conversion</title>
</head>
    <body>
        <div class="all-elements">

        <div class="banner">
            <img class="logo" src="./teamSonic.png" alt="#">
            <h1 class="team">Team</h1>
            <h1 class="sonic">SONIC</h1>
        </div>

            <div class="temperature box">
                <form action="ftoc.php" method="post">
                    <div class="row">
                    °F to °C: 
                            <input type="number" name="ftoc"> 
                            <input type="submit">
                    </div>

                </form>

                <form action="ctof.php" method="post">
                    <div class="row">
                    °C to °F: <input type="number" name="ctof">
                        <input type="submit">
                    </div>

                </form> 

            </div>
            <div class="speed box">
                <form action="kmhtoms.php" method="post">
                    <div class="row">
                        Km/h to m/s: <input type="number" name="kmhtoms">  
                        <input type="submit">
                    </div>

                </form> 
            </div>

            <div class="speed box">
                <form action="kmhtok.php" method="post"> 
                    <div class="row">
                        Km/h to Knots: <input type="number" name="kmhtok">
                        <input type="submit">
                    </div>

                </form> 
            </div>

            <div class="mass box">
                <form action="kgtog.php" method="post">
                    <div class="row">
                        Kg to g: <input type="number" name="kgtog">
                        <input type="submit">
                    </div>

                </form>
            </div> 
            <div class="mass box">
                <form action="gtokg.php" method="post">
                    <div class="row">
                        g to Kg: <input type="number" name="gtokg">
                        <input type="submit">
                    </div>
                </form> 
            </div>
        </div>
    </body>
</html>