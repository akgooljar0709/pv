


//fetch.php
<?php
  include('conn.php');
 

$sql = "SELECT distinct name_make FROM make";
  $result = mysqli_query($conn,$sql);
 
 $out='<option value="">Select Brand</option>';

  while($row = mysqli_fetch_assoc($result)) 
  {   
     $out .=  '<option>'.$row['name_make'].'</option>'; 
  }
   echo $out;
?>