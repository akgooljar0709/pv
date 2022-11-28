//fetch.php
<?php
  include('conn.php');
 

  $sql = "SELECT * FROM power WHERE id_make = 0 ORDER BY name_power ASC  ";
  $result = mysqli_query($conn,$sql);
 
  $out='<option value="">Select Power</option>';

  while($row = mysqli_fetch_assoc($result)) 
  {   
     
     $out .=  '<option>'.$row['name_power'].'</option>'; 
  }
   echo $out;
?>