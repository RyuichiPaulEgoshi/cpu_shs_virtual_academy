<?php

session_start();

if(isset($_POST['login-submit'])){

    include 'db.inc.php';

    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $upass = mysqli_real_escape_string($conn, $_POST['upass']);

    $sql = "SELECT  _user.user_sid, CONCAT(_user.user_Fname, ' ', _user.user_Lname) AS Name, _user.user_password, _status.status_name 
    FROM _user
    INNER JOIN _status
    ON _user.status_id_fk = _status.status_id
    WHERE 
    ((CONCAT(_user.user_Fname, ' ', _user.user_Lname)  = '$uname')
     OR _user.user_sid = '$uname')
     AND
     _user.user_password = '$upass';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    $status = $row['status_name'];
    $FullName = $row['Name'];

    switch (true) {

        #check empty
        case (empty($uname) || empty($upass)):
            echo "<script>
            alert('You should not empty');
            window.history.back();
            </script>";
            break;

        #check user name and password
        #if name / password is not exist in database
        #------fail------
        case ($resultCheck < 1):
            echo "<script>
            alert('Your input(s) is(are) wrong');
            window.history.back();
            </script>"; 
            break;

        #-----success-----
        # admin-active
        case ($status == "admin-active"):
        echo "<script>
        alert('welcome! $FullName');
        window.location.href='../index1_home.php';
        </script>";
        $_SESSION['u_id'] = $row['_user_id'];
            break;

        # teacher-active
        case ($status == "teacher-active"):
        echo "<script>
        alert('welcome! $FullName');
        window.location.href='../index1_home.php';
        </script>";
        $_SESSION['u_id'] = $row['_user_id'];
            break;

        # student-active
        case ($status == "student-active"):
        echo "<script>
        alert('welcome! $FullName');
        window.location.href='../index1_home.php';
        </script>";
        $_SESSION['u_id'] = $row['_user_id'];
            break;
        
        # parent-active
        case ($status == "parent-active"):
        echo "<script>
        alert('welcome! $FullName');
        window.location.href='../index1_home.php';
        </script>";
        $_SESSION['u_id'] = $row['_user_id'];
            break;
        
        # passive accounts
        case ($status == "admin-passive" ||
         $status == "teacher-passive" ||
         $status == "student-passive" ||
         $status == "parent-passive"):
            echo "<script>
            alert('Your account is not active. Pls ask admin for active your account');
            window.history.back();
            </script>";
            break;

        default:
            echo "<script>
            alert('Server Error!');
            window.history.back();
            </script>";
            break;
    }

} else{
    echo "<script>
    alert('Server Error!');
    windw.history.back();
    </script>";
    exit();
}