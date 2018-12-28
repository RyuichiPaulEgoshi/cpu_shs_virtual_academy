<?php

session_start();

    include 'includes/db.inc.php';

    $user_id = $_SESSION['u_id'];

    $sql = "SELECT acc_omm, acc_href, acc_icon, acc_name FROM _allow_access
            INNER JOIN _status
            ON _allow_access.status_id_fk = _status.status_id
            INNER JOIN _user
            ON _user.status_id_fk = _status.status_id
            INNER JOIN _access
            ON _allow_access.aaid_fk = _access.aaid 
            WHERE 
            _user.user_id  = '$user_id'
            AND
            _access.acc_par = '1';";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)):;

?>
<!--Main Navigation Bars-->
<div class="nav-container">
    <ul>
        <li onmousemove="<?php echo $row[0]; ?>"><a href="<?php echo $row[1]; ?>"><i class="material-icons"><?php echo $row[2]; ?></i><?php echo $row[3]; ?></a></li>
    </ul>
</div>
<?php
    endwhile;
?>