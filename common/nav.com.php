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
        <!--1 home-->
        <li onmousemove="ShowNav1()"><a href="index1_home.php"><i class="material-icons">default</i></a></li>
        <!--2 account-->
        <li onmousemove="ShowNav2()"><a href="#"><i class="material-icons">default</i></a></li>
        <!--3 class-->
        <li onmousemove="ShowNav3()"><a href="#"><i class="material-icons">default</i></a></li>
        <!--4 resources-->
        <li onmousemove="ShowNav4()"><a href="#"><i class="material-icons">default</i></a></li>
        <!--5 transaction-->
        <li onmousemove="ShowNav5()"><a href="#"><i class="material-icons">default</i></a></li>
        <!--6 resources-->
        <li onmousemove="ShowNav6()"><a href="#"><i class="material-icons">default</i></a></li>
        <!--7 settings-->
        <li onmousemove="ShowNav7()"><a href="#"><i class="material-icons">default</i></a></li>
        <li onmousemove="ShowNav8()"><a href="#"><i class="material-icons">default</i></a></li>
    </ul>
</div>

<!--Sub Navigation Bars-->
<div id="nav1" class="nav1">
    <h2>HOME</h2>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>



