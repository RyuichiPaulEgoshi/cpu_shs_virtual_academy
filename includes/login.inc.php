<?php

session_start();

if(isset($_POST['login-submit'])){

    include 'db.inc.php';

    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $upass = mysqli_real_escape_string($conn, $_POST['upass']);

    include '../common/dbscripts.com.php';
    $result = $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    switch (true) {

        #check empty
        case (empty($uname) || empty($upass)):
            break;
        
        #check user name and password
        case ($reultCheck < 1):
            break;
        
        #success
        default:
            switch (true) {

                # active-admin
                case ():
                    break;

                # active-teacher
                case ():
                    break;

                # active-student
                case ():
                    break;
                
                # active-parent
                case ():
                    break;
                
                # passive accounts
                case ():
                    break;

                #error
                default:
                    break;
            }
            break;
    }

} else{
    echo "<script>
    alert('Server Error!');
    window.history.back();
    </script>";
    exit();
}