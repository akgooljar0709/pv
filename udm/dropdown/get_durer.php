//fetch.php
<?php
  include('conn.php');
 

  $sql = "SELECT * FROM durer  ";
  $result = mysqli_query($conn,$sql);
 
 $out='<option value="">Select Daily route duration</option>';

  while($row = mysqli_fetch_assoc($result)) 
  {   
     $out .=  '<option>'.$row['name_durer'].'</option>'; 
  }
   echo $out;
?>