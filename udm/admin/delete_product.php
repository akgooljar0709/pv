<?php
if (!empty($_GET['pid'])) {
    // require connection
    include 'conn.php';

    $id = $_GET['pid'];
    $del_query = "DELETE FROM `product` WHERE id = $id";
    $result = mysqli_query($conn, $del_query);
    if ($result) {
        header('location:manage-products.php?msg=del');
    }
}