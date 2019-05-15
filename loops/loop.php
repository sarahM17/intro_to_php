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
    <div class="table table-dark table-1">
        <?php
        $multiarray = array (

            array("name"=>"Game of thrones", "rating"=>"5"),
            array("name"=>"Stranger things", "rating"=>"6"),
            array("name"=>"The big bang theorie", "rating"=>"8"),
            array("name"=>"Bumba", "rating"=>"4"),
            array("name"=>"Breaking bad", "rating"=>"7"),
            array("name"=>"La casa de papel", "rating"=>"3"),
            array("name"=>"The walking dead", "rating"=>"2"),
            array("name"=>"Glow", "rating"=>"9"),
        );
        //$count = 0;

        foreach ($multiarray as $arrays){
            //$count++;
            echo "<table>" ;
            

            echo "<span>table</span>";
            echo "<tr>";
            foreach ($arrays as $names => $ratings){

                echo "<th>$names</th>";
                echo "<td>$ratings</td>";

            }
            echo "</tr>";                                            
            echo "</table>";
        }
        ?>
    </div>
</div>
</body>
</html>