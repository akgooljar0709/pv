<?php
include('conn.php');

$sql = "SELECT * FROM type";
$result = mysqli_query($conn, $sql);


    // output data of each row
while($row = mysqli_fetch_assoc($result)) {


	$data['value']=$row['id_type'];
	$data['label']=$row['name_type'];
	$json[]=$data;      
}
echo json_encode($json);


mysqli_close($conn);
?> 