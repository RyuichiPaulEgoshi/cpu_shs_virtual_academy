<?php

    #SELECT
    $sql= '';
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    #true
    ($reultCheck < 1);
    #SELECTED
    $row = mysqli_fetch_assoc($result);