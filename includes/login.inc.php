<?php

session_start();

include 'db.inc.php';

function account(

)

switch (true) {

    #Admin account
    case (isset($_POST['stu-acc'])):
        break;
    
    #Teacher account
    case (isset($_POST['tea-acc'])):
        break;
    
    #Student account
    case (isset($_POST['stu-acc'])):
        break;

    #Parent account
    case (isset($_POST['par-acc'])):
        break;
    
    #System Error
    default:
        echo "<script>
        alert('Error!');
        window.history.back();
        </script>";
        break;
}