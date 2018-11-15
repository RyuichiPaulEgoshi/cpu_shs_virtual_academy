<?php

session_start();

include 'db.inc.php';

switch (true) {

    #1
    case (isset($_POST[''])):
        break;

    #2
    case (isset($_POST[''])):
        break;
    
    #3
    case (isset($_POST[''])):
        break;

    #4
    case (isset($_POST[''])):
        break;
    
    #5
    case (isset($_POST[''])):
        break;
    
    #6
    case (isset($_POST[''])):
        break;
    #error
    default:
        # code...
        echo "<script>
        alert('System Error!!');
        window.history.back();
        </script>";
        break;
}