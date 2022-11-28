//fetch.php
<?php
  include('conn.php');
 

  $sql = "SELECT * FROM consumption  ";
  $result = mysqli_query($conn,$sql);
 
  $out='<option value="">Select Fuel Consumption</option>';

  while($row = mysqli_fetch_assoc($result)) 
  {   
     $out .=  '<option>'.$row['name_consumption'].'</option>'; 
  }
   echo $out;
?>