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

?>

<!--Main Navigation Bars-->
<div class="nav-container">
    <ul>
        <li onmousemove="ShowNav1()"><a href="#"><i class="material-icons">default</i></a></li>
        <li onmousemove="ShowNav2()"><a href="#"><i class="material-icons">default</i></a></li>
        <li onmousemove="ShowNav3()"><a href="#"><i class="material-icons">default</i></a></li>
        <li onmousemove="ShowNav4()"><a href="#"><i class="material-icons">default</i></a></li>
        <li onmousemove="ShowNav5()"><a href="#"><i class="material-icons">default</i></a></li>
        <li onmousemove="ShowNav6()"><a href="#"><i class="material-icons">default</i></a></li>
        <li onmousemove="ShowNav7()"><a href="#"><i class="material-icons">default</i></a></li>
        <li onmousemove="ShowNav8()"><a href="#"><i class="material-icons">default</i></a></li>
    </ul>
</div>

<!--Sub Navigation Bars-->
<div id="home-nav" class="home-nav">
    <h2>HOME</h2>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>



