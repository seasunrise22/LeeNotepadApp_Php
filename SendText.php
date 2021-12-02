<?php

    //error_reporting( E_ALL );
    //ini_set( "display_errors", 1 );

    $con = mysqli_connect('localhost', 'root', 'root', 'leenotepadappdb');

    //check that connection happened
    if(mysqli_connect_errno())
    {
        echo "1"; //error code #1 = connection failed
        exit();  
    }

    $text = $_POST["text"];

    //add to the table
    $insertTextQuery = "INSERT INTO memo_normal (Text)  
                        VALUES('".$text."')";
    $result = mysqli_query($con, $insertTextQuery);
    if($result==1)
    {
        echo "저장성공";
    }else{
        echo "저장실패";
    }

?>