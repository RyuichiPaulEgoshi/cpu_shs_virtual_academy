<?php

session_start();

    include 'includes/db.inc.php';

    $sql = "SELECT acc_omm, acc_href, acc_icon FROM _access WHERE acc_par = 1";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)):;

?>
<!--Main Navigation Bars-->
<div class="nav-container">
    <ul>
        <li onmousemove="<?php echo $row[0]; ?>"><a href="<?php echo $row[1]; ?>"><i class="material-icons"><?php echo $row[2]; ?></i></a></li>
    </ul>
</div>
<?php
    endwhile;
?>

<!--Sub Navigation Bars-->

<!--Sub 1 Home-->
<div id="nav1" class="nav1">
    <h2>HOME</h2>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 2 Account-->
<?php
    include 'includes/db.inc.php';
?>
<div id="nav2" class="nav2">
    <h2>ACCOUNT</h2>
    <h1></h1>
    <a href="3Account/2.1viewacc.php"><img src=""></a>
    <?php
        include 'includes/db.inc.php';

        $sql2 = "SELECT acc_href, acc_icon, acc_name FROM _access WHERE acc_par = 3";
        $result2 = mysqli_query($conn, $sql2);
        while($row2 = mysqli_fetch_array($result2)):;
    ?>
    <ul>
        <li><a href="<?php echo $row2[0]; ?>"><i class="material-icons"><?php echo $row2[1]; ?></i><?php echo $row2[2]; ?></a></li>
    </ul>
    <?php
        endwhile;
    ?>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 3 Class-->
<div id="nav3" class="nav3">
    <?php
        include 'includes/db.inc.php';

        $sql3 = "SELECT acc_href, acc_icon, acc_name FROM _access WHERE acc_par = 4";
        $result3 = mysqli_query($conn, $sql3);
        while($row3 = mysqli_fetch_array($result3)):;
    ?>
    <ul>
        <li><a href="<?php echo $row3[0]; ?>"><i class="material-icons"><?php echo $row3[1]; ?></i><?php echo $row3[2]; ?></a></li>
    </ul>
    <?php
        endwhile;
    ?>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 4 Resources-->
<div id="nav4" class="nav4">
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 5 Transaction-->
<div id="nav5" class="nav5">
    <h2>TRANSACTIONS</h2>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 6 Settings-->
<div id="nav6" class="nav6">
    <h2>SETTINGS</h2>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 7 Help-->
<div id="nav7" class="nav7">
    <h2>HELP</h2>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>



---------------------

<!--Sub Navigation Bars-->

<!--Sub 1 Home-->
<div id="nav1" class="nav1">
    <h2>HOME</h2>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 2 Account-->
<div id="nav2" class="nav2">
    <h2>ACCOUNT</h2>
    <h1></h1>
    <a href="3Account/2.1viewacc.php"><img src=""></a>
    <?php
        include 'includes/db.inc.php';

        $sql2 = "SELECT acc_href, acc_icon, acc_name FROM _access WHERE acc_par = 3";
        $result2 = mysqli_query($conn, $sql2);
        while($row2 = mysqli_fetch_array($result2)):;
    ?>
    <ul>
        <li><a href="<?php echo $row2[0]; ?>"><i class="material-icons"><?php echo $row2[1]; ?></i><?php echo $row2[2]; ?></a></li>
    </ul>
    <?php
        endwhile;
    ?>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 3 Class-->
<div id="nav3" class="nav3">
    <?php
        $sql3 = "SELECT acc_href, acc_icon, acc_name FROM _access WHERE acc_par = 4";
        $result3 = mysqli_query($conn, $sql3);
        while($row3 = mysqli_fetch_array($result3)):;
    ?>
    <ul>
        <li><a href="<?php echo $row3[0]; ?>"><i class="material-icons"><?php echo $row3[1]; ?></i><?php echo $row3[2]; ?></a></li>
    </ul>
    <?php
        endwhile;
    ?>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 4 Resources-->
<div id="nav4" class="nav4">
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 5 Transaction-->
<div id="nav5" class="nav5">
    <h2>TRANSACTIONS</h2>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 6 Settings-->
<div id="nav6" class="nav6">
    <h2>SETTINGS</h2>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 7 Help-->
<div id="nav7" class="nav7">
    <h2>HELP</h2>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>

<!--Sub 8 Class-->
<div id="nav8" class="nav8">
    <h2>CLASS</h2>
    <i class="material-icons" id="closeNav" onclick="CloseNav()">backspace</i>
</div>

<!--Sub 9 Account-->
<div id="nav9" class="nav9">
    <h3>ACCOUNT</h3>
    <i class="material-icons" id="closenav" onclick="CLoseNav()">backspace</i>
</div>

<!--Sub 10 Account 2-->
<div id="nav10" class="nav10">
    <h3>ACCOUNT2</h3>
    <i class="material-icons" id="closenav" onclick="closeNav()">backspace</i>
</div>

<!--Sub 11 Account 3-->
<div id="nav11" class="nav11">
   <h2>ACOUNT3</h2>
   <i class="material-icons" id="closenav" onclick="closeNav()">backspace</i>    
</div>

<!--Sub 12 Account 4-->
<div id="nav12" class="nav12">
    <h2>ACCOUNT4</h2>
    <i class="material-icons" id="closenav" onclick="closeNav()">backspace</i>
</div>

<!--Sub 13 Account 5-->
<div id="nav13" class="nav13">
    <h2>ACCOUNT5</h2>
    <i class="material-icons" id="closenav" onclick="closeNav()">backspace</i>
</div>