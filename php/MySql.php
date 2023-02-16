<!-- <?php
        // session_start();
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaiables

    </title>
</head>

<body>


    <?php

    //! ways to connect mysql 
    // 1 . MYSQLi extension
    // 2 . php database objects


    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $database="najidb2";

    // //create a connection obhect
    // $conn = mysqli_connect($servername, $username, $password,$database);
    // if (!$conn) {
    //     die("Connection was not successfull <br>" . mysqli_connect_error());
    // }
    // echo "Connection was sussefful <br>";

    //create a db
    // $sql = "CREATE DATABASE najidb2 ";
    // $result = mysqli_query($conn, $sql);

    // // check for the database creation is success
    // if ($result) {
    //     echo "the db was created succefully";
    // } else {
    //     echo "The db was not created successfully";
    // }
    // $sql="CREATE TABLE najitable";

    //! Cookies and sessions in php
    // $cookie_name = "user";
    // $cookie_value = "najid navas";

    // // setcookie($cookie_name, $cookie_value, time() + 20);
    // echo "Cookie named " . $_COOKIE[$cookie_name] . "is set up <br>";

    //!Sessions in php
    // $_SESSION["favcolor"] = "green";
    // $_SESSION["favanimal"] = "cat";
    // echo "Sessions are set";
    // print_r($_SESSION);
    // session_destroy();
    // print_r($_SESSION);

    //!Error handling in php
    // function error_function($errno, $errstr)
    // {
    //     echo "<b>Error:</b> [$errno] $errstr<br>";
    //     echo "Ending Script";
    //     die();
    // }
    //error handler function
    // function customError($errno, $errstr)
    // {
    //     echo "<b>Error:</b> [$errno] $errstr";
    // }

    // //set error handler
    // set_error_handler("customError");

    // //trigger error
    // echo ($test);


    //!Exception handling in php

    function checkNumber($number)
    {
        if ($number > 1) {
            throw new Exception("The value must be 1 or below");
        }
        return true;
    }

   try {
    checkNumber(0);
    echo "If you see this text then the number is 1 or below";
   }

   //catch expression
   catch(Exception $e){

       echo 'Message: '. $e->getMessage();
   }






    ?>
</body>

</html>