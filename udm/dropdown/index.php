<!DOCTYPE html>
<html>
<head>
	<title> </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom.css">


<style type="text/css">
    body{
        width: 1000px;
        font-family: calibri;
        padding: 0;
        margin: 0 auto;

    }
    .frm{
        border: 5px solid #7ddaff;
        background-color: #b4c8d0;
        margin: 0px auto;
        padding: 40px;
        border-radius: 4px;
    }
    .control-label col-sm-2{
        padding: 10px;
        border-radius: #bdbdbd 1px solid;
        border-radius: 4px;
        background-color: #FFF;
        width: 50%;
    }
    .form-group{
        padding-bottom: 40px;
        padding-left: 150px;
    }
</style>


<body class='frm'>
<h1>Sondage vehicle :</h1> 
</div>


<br>
<br>
 <form role="form" class="form-horizontal" >

  <div class="form-group">
    <label class="control-label col-sm-2">Type de vehicule</label>
    <div class="col-sm-4">
      <select class="form-control types">
       <option value="">--Select--</option>
     </select>
   </div>
 </div>

  <div class="form-group">
  <label class="control-label col-sm-2">Energy</label>
  <div class="col-sm-4">
   <select class="form-control energies">
     <option value="">--Select--</option>
   </select>
 </div>
</div>

 <div class="form-group">
  <label class="control-label col-sm-2">Make</label>
  <div class="col-sm-4">
   <select class="form-control makes">
     <option value="">--Select--</option>
   </select>
 </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2">Power</label>
  <div class="col-sm-4">
   <select class="form-control powers">
     <option value="">--Select--</option>
   </select>
 </div>
 </div>

<div class="form-group">
  <label class="control-label col-sm-2">Durée d'usage journalier</label>
  <div class="col-sm-4">
   <select class="form-control durer">
     <option value="">--Select--</option>
   </select>
 </div>
 </div>




</form>





</p>



</body>
</html>

<div class="div">
  
</div>










<script type="text/javascript">
	
  $(document).ready(function(){


    /*Get the type list */

      $.ajax({
        type: "GET",
        url: "get_type.php",
        data:{id:$(this).val()}, 
        beforeSend :function(){
      $('.types').find("option:eq(0)").html("Please wait..");
        },                         
        success: function (data) {
          /*get response as json */
           $('.types').find("option:eq(0)").html("Select type");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('.types').append(option);
         });  

          /*ends */
          
        }
      });



    /*Get the energy list */

    $('.types').change(function(){
      $.ajax({
        type: "POST",
        url: "get_energy.php",
        data:{id:$(this).val()}, 
        beforeSend :function(){
      $(".energies option:gt(0)").remove(); 
      $(".makes option:gt(0)").remove(); 
      $('.energy').find("option:eq(0)").html("Please wait..");

        },                         
        success: function (data) {
          /*get response as json */
           $('.energies').find("option:eq(0)").html("Type d'energy");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('.energies').append(option);
         });  

          /*ends */
          
        }
      });
    });














    /*Get the make list */

    $('.energies').change(function(){
      $.ajax({
        type: "POST",
        url: "get_make.php",
        data:{id:$(this).val()}, 
        beforeSend :function(){
      $(".makes option:gt(0)").remove(); 
      $(".durer option:gt(0)").remove(); 
      $('.makes').find("option:eq(0)").html("Please wait..");

        },                         
        success: function (data) {
          /*get response as json */
           $('.makes').find("option:eq(0)").html(" La marque");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('.makes').append(option);
         });  

          /*ends */
          
        }
      });
    });





    



/*Get the type power */
 $('.makes').change(function(){
      $.ajax({
        type: "POST",
        url: "get_power.php",
        data:{id:$(this).val()}, 
        beforeSend :function(){
      $('.powers').find("option:eq(0)").html("Please wait..");
        },                         
        success: function (data) {
          /*get response as json */
           $('.powers').find("option:eq(0)").html("Puissance (hp)");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('.powers').append(option);
         });  

          /*ends */
          
        }
      });
    });



    /*Get the Generation list*/


 $('.powers').change(function(){
      $.ajax({
        type: "POST",
        url: "get_durer.php",
        data:{id:$(this).val()}, 
          beforeSend :function(){
   
      $(".durer option:gt(0)").remove(); 
  

        },  

        success: function (data) {
          /*get response as json */
            $('.durer').find("option:eq(0)").html("Durée/jour (minutes)");

          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);
           $('.durer').append(option);
         });  
          
          /*ends */
          
        }
      });
  });





  });





</script>
<style type="text/css">
  
</style>
