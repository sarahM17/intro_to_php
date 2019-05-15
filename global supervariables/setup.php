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
    <div class="row d-flex flex-row justify-content-center">
        <div class="col-md-5 flex-column justify-content-center row1">
            <form method="post" action="result.php">
                <p>Enter your top 5 favorite movies or tv shows:</p>
                <input maxlength="30" name="item[0][movie]" size="30" type="text" /><br>
                <input maxlength="30" name="item[1][movie]" size="30" type="text" /><br>
                <input maxlength="30" name="item[2][movie]" size="30" type="text" /><br>
                <input maxlength="30" name="item[3][movie]" size="30" type="text" /><br>
                <input maxlength="30" name="item[4][movie]" size="30" type="text" /><br>
                <input type="submit" value="Submit" />
            </form>
        </div>
        <div class="col-md-5 flex-column justify-content-center row1">
            <form method="get"  action="result.php">
                <p>Enter your top 5 countries:</p>
                <input maxlength="30" name="item[0][countrie]" size="30" type="text" /><br>
                <input maxlength="30" name="item[1][countrie]" size="30" type="text" /><br>
                <input maxlength="30" name="item[2][countrie]" size="30" type="text" /><br>
                <input maxlength="30" name="item[3][countrie]" size="30" type="text" /><br>
                <input maxlength="30" name="item[4][countrie]" size="30" type="text" /><br>
                <input type="submit" value="Submit" />
            </form>
        </div>
        <div class="col-md-5 flex-column justify-content-center row1">
            <form method="get" action="result.php">
                <p>Enter your worst movie ever seen:</p>
                <input maxlength="30" name="item[0][worstM]" size="30" type="text" /><br>
                <input type="submit" value="Submit" />
            </form>
        </div>
    </div>
</div>
</body>
</html>