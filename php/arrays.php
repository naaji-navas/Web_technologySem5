<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    //normal arrays
    $numbers = [1, 2, 13, 4];

    for ($i = 0; $i < 3; $i++) {
        echo "$numbers[$i] <br>";
    }
    print_r($numbers);

    //associated arrays
    $colors=[
        1=>"red",
        2=>"blue",
        3=>"green"
    ];
    for ($i = 1; $i <=3; $i++) {
        echo "<br> $colors[$i] <br>";
    }

    ?>
</body>

</html>