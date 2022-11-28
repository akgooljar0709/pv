<?php
if (!empty($_GET['uid'])) {
    // require connection
    include 'conn.php';

    $aid = $_GET['cat_id'];
    $del_query = "DELETE FROM `admin` WHERE aid = $aid";
    $result = mysqli_query($conn, $del_query);
    if ($result) {
        header('location:manage-users.php?msg=del');
    }
}