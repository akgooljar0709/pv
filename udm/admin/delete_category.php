<?php
if (!empty($_GET['cid'])) {
    // require connection
    include 'conn.php';

    $cid = $_GET['cid'];
    $del_query = "DELETE FROM `category` WHERE cat_id = $cid";
    $result = mysqli_query($conn, $del_query);
    if ($result) {
        header('location:manage-category.php?msg=del');
    }
}