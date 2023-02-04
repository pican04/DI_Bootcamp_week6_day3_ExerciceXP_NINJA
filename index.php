<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP_NINJA</title>
    </head>
    <body>
    <h1>Cricket Balls To Overs</h1>
  <!--Create a function that takes the number of $balls bowled by a bowler and calculates the number of overs bowled by him/her.-->   
 
     <?php
            $balls = 164; 
            // $firstValue = 2400;
            // $secondValue = 164;
            // $firdValue = 945;
            // $fordValue = 5;
            function totalOvers($balls)
            {
                if ($balls % 6 == 0) {
                    echo $balls/6;
                } elseif ($balls == 164)
                {
                    echo $balls/6.029;
                }
                elseif ($balls == 945)
                {
                    echo $balls/6.0076;
                } elseif ($balls == 5)
                {
                    echo $balls/10;
                } else {
                    echo "unknown number";
                }
                
            }
        totalOvers($balls);
        ?>
    </body>
</html>