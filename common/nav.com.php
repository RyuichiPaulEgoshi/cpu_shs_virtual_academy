<?php

case (true):

    #admin account
    case (isset($_POST['admin-acc'])):
    
    break;

    #teacher account
    case (isset($_POST['teacher-acc'])):
    break;

    #stuent account
    case (isset($_POST['student-acc'])):
    break;

    #parent account
    case (isset($_POST['parent-acc'])):
    break;

    #error
    default:

    # code...
    echo "<script>
    alert('System Error!!');
    window.history.back();
    </script>";
    break;