<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blackjack</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="container">
    <div class="row d-flex flex-column offset-md-4 justify-content-center ">
        <h1>Exercise superglobals</h1>
    </div>
    <div class="table table-bordered table-dark justify-content-center">
        <?php
        $multiarray = array (

            array("Game of thrones", "5"),
            array("Stranger things", "6"),
            array("The big bang theorie", "8"),
            array("Bumba", "4"),
            array("Breaking bad", "7"),
            array("La casa de papel", "3"),
            array("The walking dead", "2"),
            array("Glow", "9"),
        );
        $count = 0;

        foreach ($multiarray as $arrays){
            $count++;
            echo "<table>" ;


            echo "<span>Table $count</span>";
            echo "<thead>";

                    echo "<td>Name</td>";
                    echo "<td>Rating</td>";


            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            foreach ($arrays as $names /*=> $ratings*/){
                echo "<td>$names</td>";
                //echo "<td>$ratings</td>";

            }
            echo "</tr>";
            echo "</tbody>";
            echo "</table><br>";
        }
        ?>
    </div>
</div>
</body>
</html>