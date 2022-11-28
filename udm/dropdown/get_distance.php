//fetch.php
<?php
  include('conn.php');
 

  $sql = "SELECT * FROM distance  ";
  $result = mysqli_query($conn,$sql);
 
$out='<option value="">Select Distance</option>';
  while($row = mysqli_fetch_assoc($result)) 
  {   
     $out .=  '<option>'.$row['name_distance'].'</option>'; 
  }
   echo $out;
?>