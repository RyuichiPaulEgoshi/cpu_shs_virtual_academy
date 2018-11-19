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
        <li onmousemove="ShowNav2()"><a href="index2_account.php"><i class="material-icons">default</i></a></li>
        <!--3 class-->
        <li onmousemove="ShowNav3()"><a href="index3_class.php"><i class="material-icons">default</i></a></li>
        <!--4 resources-->
        <li onmousemove="ShowNav4()"><a href="index4_resources.php"><i class="material-icons">default</i></a></li>
        <!--5 transaction-->
        <li onmousemove="ShowNav5()"><a href="index5_transaction.php"><i class="material-icons">default</i></a></li>
        <!--6 setting-->
        <li onmousemove="ShowNav6()"><a href="index6_settng.php"><i class="material-icons">default</i></a></li>
        <!--7 help-->
        <li onmousemove="ShowNav7()"><a href="index7_help.php"><i class="material-icons">default</i></a></li>
    </ul>
</div>

<!--Sub Navigation Bars-->

<!--Sub 1 Home-->
<div id="nav1" class="nav1">
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 2 Account-->
<div id="nav2" class="nav2">
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 3 Class-->
<div id="nav3" class="nav3">
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 4 Resources-->
<div id="nav4" class="nav4">
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 5 Transaction-->
<div id="nav5" class="nav5">
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 6 Settings-->
<div id="nav6" class="nav6">
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 7 Help-->
<div id="nav7" class="nav7">
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>