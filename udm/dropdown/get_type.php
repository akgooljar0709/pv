//fetch.php
<?php
  include('conn.php');
 
  $id = $_POST['id'];
  $sql = "SELECT * FROM energy WHERE id_type = $id ";
  $result = mysqli_query($conn,$sql);
 
 $out='<option value="">Select Type</option>';
  while($row = mysqli_fetch_assoc($result)) 
  {   
     $out .=  '<option>'.$row['name_energy'].'</option>'; 
  }
   echo $out;
?>