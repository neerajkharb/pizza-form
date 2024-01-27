
<!DOCTYPE html>
<html>
    <head>
        <title>Order confirmation</title>
        <style>

            body {
            position: relative;
            font-family: 'Source Sans Pro',sans-serif;
            background-image: url(./Images/pizza6.jpg);
            background-size:cover;
            background-repeat: no-repeat;
            }
            .pizzen {
                padding: 20px;
                border: 1px solid black;
                width: 30%;
                margin:auto;
                }
            
            #container {
                
                margin:auto;
                top: 50%;
                padding: 60px;
                width: 40%;
                text-align: center;
                background-size: 100% 100%;
                
            
            }
            #text {
                font-size: 32px;
            }
        </style>
    </head>
        <body> 
            
            <div id='container'>
                Hallo
            <?php
            echo $_POST["vorname"]; 
            ?>,
            <br></br>
                <div id='text'>
                Vielen Dank für die Bestellung!<br><br>
                </div>
            <?php
                
                $vname = $_POST["vorname"];
                $nname = $_POST["nachname"];
                $pizza = $_POST["pizza"];
                $strasse = $_POST["strasse"];
                $hnummer = $_POST["hausnummer"];
                $bland = $_POST["bundesland"];
                $plzort = $_POST["plzort"];


                for ($X=0; $X < (sizeof($pizza)); $X++)
                {
                    if($X == 0){
                        if(sizeof($pizza) > 1){
                            echo "Bestellte Pizzen:";
                        }
                        else{
                            echo "Bestellte Pizza:";
                        }
                        echo "</br></br>";
                        echo "<div class=\"pizzen\">";
                    }
                    echo $pizza[$X];
                    echo "<br>";
                    if($X == sizeof($pizza)-1){
                        echo "</div>";
                    }
                }
                echo "<br>Sie";
                if(sizeof($pizza) > 1){
                    echo " werden ";
                }
                else{
                    echo " wird ";
                }
                echo "in Kürze an die folgende Addresse geschickt: <br><br>".$strasse." ".$hnummer." "."<br>".$plzort." "."<br>".$bland;
                
            ?>
            </div>
        </body>
</html>