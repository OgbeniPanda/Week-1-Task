<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Olekoko.php" method="post">
    RANGE <br>
    START: <input type="number" name="Numb1">
    <br><br>
    END: <input type="number" name="Numb2">
    <br><br>
    <input type="Submit">
    </form>
    <br>
    <?php
    

           function maddo_I_Tire(){
            $NumbA = $_POST["Numb1"];
            $NumbB = $_POST["Numb2"];
               for($NumbA; $NumbA <= $NumbB; $NumbA++){
                   echo "$NumbA<br>";
               }
           }
           maddo_I_Tire();

           // The second part 
           $JambScores = array(2, 4, 6);
           function AnotherWahala($JambScores){
               return $JambScores[0] + $JambScores[1] + $JambScores[2];
               }
               
           echo AnotherWahala($JambScores);

           // I don try my best

           
    ?>
</body>
</html>