<!--Left Navigation Bars-->
<div class="nav-container">
    <ul>
        <li onmousemove="ShowHomNav()"><a href="index1_home.php"><i class="material-icons">home</i></a></li>
        <li onmousemove="ShowAccNav()"><a href="index2_account.php"><i class="material-icons">person</i></a></li>
        <li onmousemove="ShowSchNav()"><a href="index3_class.php"><i class="material-icons">school</i></a></li>
        <li onmousemove="ShowResNav()"><a href="index5_transaction.php"><i class="material-icons">compare_arrows</i></a></li>
        <li onmousemove="ShowSetNav()"><a href="index6_settng.php"><i class="material-icons">settings</i></a></li>
        <li id="down-item"><a href="index7_help.php"><i class="material-icons">help</i></a></li>
    </ul>
</div>
<!--Sub Navigation Bars-->
<div id="home-nav" class="home-nav">
    <h2>HOME</h2>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>
<div id="acc-nav" class="acc-nav">
    <h2>ADMIN</h2>
    <h1>Ryuichi Paul Egoshi</h1>
    <a href="#"><img src="pics/_ex_profile_pic.jpg"></a>
    <ul>
        <li><a href="#"><i class="material-icons">person</i>View Your Account</a></li>
        <li><a href="#"><i class="material-icons">edit</i>Edit Your Account</a></li>
        <li><a href="#"><i class="material-icons">people</i>Student's Acc. List</a></li>
        <li><a href="#"><i class="material-icons">people</i>Teacher's Acc. List</a></li>
        <li><a href="#"><i class="material-icons">person_add</i>Accept Teacher's Acc.</a></li>
        <li id="logout"><a href="#"><i class="material-icons">exit_to_app</i>Log Out</a></li>
    </ul>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>
<div id="sch-nav" class="sch-nav">
    <h2>CLASS</h2>
    <ul>
        <li><a href="#"><i class="material-icons">format_list_bulleted</i>class catalog</a></li>
    </ul>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>
<div id="res-nav" class="res-nav">
    <h2>TRANSACTIONS</h2>
    <ul>
        <li><a href="#"><i class="material-icons">person</i>accounts transaction</a></li>
        <li><a href="#"><i class="material-icons">school</i>classes transaction</a></li>
        <li><a href="#"><i class="material-icons">folder</i>resources transaction</a></li>
    </ul>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>
<div id="set-nav" class="set-nav">
    <h2>SETTINGS</h2>
    <i class="material-icons" id="closeNav" onclick="CloseNav()">backspace</i>
</div>