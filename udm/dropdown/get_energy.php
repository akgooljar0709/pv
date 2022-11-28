<?php
include('conn.php');

$id = $_POST['id'];
$sql = "SELECT * FROM energy WHERE id_type = '".$_POST['id']."'";
$result = mysqli_query($conn, $sql);


    // output data of each row
while($row = mysqli_fetch_assoc($result)) {


	$data['value']=$row['id_energy'];
	$data['label']=$row['name_energy'];
	$json[]=$data;      
}
echo json_encode($json);


mysqli_close($conn);
?> 