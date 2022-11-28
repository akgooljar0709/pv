<?php
include('conn.php');

$sql = "SELECT * FROM battery_capacity";
$result = mysqli_query($conn, $sql);


    // output data of each row
while($row = mysqli_fetch_assoc($result)) {


	$data['value']=$row['id_capacity'];
	$data['label']=$row['name_capacity'];
	$json[]=$data;      
}
echo json_encode($json);


mysqli_close($conn);
?> 