//fetch.php
<?php
  include('conn.php');
 
  $id = $_POST['id'];
  $sql = "SELECT * FROM carmodels WHERE brand_id= $id ";
  $result = mysqli_query($conn,$sql);
 
  $out='';
  while($row = mysqli_fetch_assoc($result)) 
  {   
     $out .=  '<option>'.$row['car_models'].'</option>'; 
  }
   echo $out;
?>