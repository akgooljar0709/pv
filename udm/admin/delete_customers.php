<?php
if (!empty($_GET['id'])) {
    // require connection
    include 'conn.php';

    $id = $_GET['id'];
    $del_query = "DELETE FROM `users` WHERE id = $id";
    $result = mysqli_query($conn, $del_query);
    if ($result) {
        header('location:manage-customers.php?msg=del');
    }
}