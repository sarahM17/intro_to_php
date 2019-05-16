<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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

            array("<a href='https://www.google.com/search?q=Game of thrones'>Game of thrones</a>", "5"),
            array("<a href='https://www.google.com/search?q=Stranger things'>Stranger things</a>", "6"),
            array("<a href='https://www.google.com/search?q=The big bang theorie'>The big bang theorie</a>", "8"),
            array("<a href='https://www.google.com/search?q=Bumba'>Bumba</a>", "4"),
            array("<a href='https://www.google.com/search?q=Breaking bad'>Breaking bad</a>", "7"),
            array("<a href='https://www.google.com/search?q=La casa de papel'>La casa de papel</a>", "3"),
            array("<a href='https://www.google.com/search?q=The walking dead'>The walking dead</a>", "2"),
            array("<a href='https://www.google.com/search?q=Glow'>Glow</a>", "9"),
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
            foreach ($arrays as $names /*=> $rating*/){
                for ($x = 1; $x <= $names; $x++) {
                echo '<i class="fa fa-star" aria-hidden=""></i>';
            }
                if (strpos($names, '.')) {
                    echo '<i class="fa fa-star-half-o" aria-hidden=""></i>';
                    $x++;
                }
                while ($x <= 5) {
                    echo '<i class="fa fa-star-o" aria-hidden=""></i>';
                    $x++;
                }

                echo "<td>$names</td>";
                //echo "<td>$rating</td>";

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