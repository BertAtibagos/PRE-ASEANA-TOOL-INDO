<?php
session_start();

if(!isset($_SESSION["name"])){
    header("Location:logout.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->

<link rel="stylesheet" href="css/tool-tip-for-export.css">
<link rel="stylesheet" href="css/font-body.css">
<link rel="stylesheet" href="css/sort-data-stylesheet.css">
<link rel="stylesheet" href="css/path-name-stylesheet.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>


</head>
<style>
</style>
<body>

<p class="path-name-height" style="font-size:15px;">Menu | Data | 
<i class="fas fa-download"></i>
    <span style="font-weight:bold">Export</span>
</p><br><br>

<div style="margin-top: 12%">
<div class="column" style="background-color:none; border:1px solid #bbb; border-radius:3px;">

<div class="div-2-column-adjustment">
<h3>Export by Specific Year</h3>  
<form  action="sort-results.php" method=POST>



<label>

<span title="*Type specific year">
<input class="input-text-design"  style="margin-right:10px" type="text" placeholder="YYYY" name="year" id="year" required>
</span>
    
</label>


<button type="button" class="defaultsrtspc en-dis-button-design disable-button">
        <label class="tooltip" ><i class='fas fa-sort-alpha-down sort-by-alphabet-design'></i><span class="tooltiptext" >Sort data alphabetically</span></label></label>

      </button>

      <button type="button" class="allsortspc en-dis-button-design enable-button">
        <label class="tooltip"><i class='fas fa-sort-alpha-down sort-by-alphabet-design'></i></label><i class="fas fa-check-circle" style="margin-left:10px; font-size:18px;"></i>

      </button>

      <input class="allDatatrue" type="hidden" id="alphasrt" name="alphasrt" value='false'></input>  <!-- wag pakialaman -->

 <button class="load-button-design" type="submit" value="Sort">Submit</button>
</form><br>

<form action="sort-results-between.php" method="POST">

<h2><span>or</span></h2>


     <h3>Export by Year-Over-Year</h3>
     
     <span title="from 'yyyy'">
     <input class="input-text-design" type="text" placeholder="YYYY" name="year1" id="year" required><span>&nbsp -&nbsp</span>
     </span>

     <span title="to 'yyyy'">
     <input class="input-text-design" style="margin-right:10px" type="text" placeholder="YYYY" name="year2" id="year" required>
     </span>

     <button type="button" class="defaultsrtbtw en-dis-button-design disable-button">
        <label class="tooltip" ><i class='fas fa-sort-alpha-down sort-by-alphabet-design'></i><span class="tooltiptext" >Sort data alphabetically</span></label></label>

      </button>

      <button type="button" class="allsortbtw en-dis-button-design enable-button">
        <label class="tooltip"><i class='fas fa-sort-alpha-down sort-by-alphabet-design'></i></label><i class="fas fa-check-circle" style="margin-left:10px; font-size:18px;"></i>

      </button>

      <input class="allDatatrue" type="hidden" id="alphasrt" name="alphasrt" value='false'></input>  <!-- wag pakialaman -->


     <button class="load-button-design" type="submit" value="Sort">Submit</button>


</form>
</div>
</div>
<div class="row ">

  <div class="column"   style="background-color:none; border:1px solid #bbb; border-radius:3px;">
  <div class="div-2-column-adjustment">
  
  <H3 style="">Export all the Data</H3>
  <br><br>
  <form action="sort-results_basic.php" method=POST>

<center>

      <button class="gen-data-button" type="submit" value="Sort"><span>GENERATE ALL DATA</span></button>

      <!-- <button  class="load-button-design generate-all-button"  type="submit" value="Sort"><i class="fa fa-gear gear-icon-rotate ">	&#xf013;</i><label class="generate-all-title">&nbsp Generate all Data</label></button> -->
      <button type="button" class="defaultsrt en-dis-button-design disable-button">
        <label class="tooltip" ><i class='fas fa-sort-alpha-down sort-by-alphabet-design'></i><span class="tooltiptext" >Sort data alphabetically</span></label></label>

      </button>

      <button type="button" class="allsort en-dis-button-design enable-button">
        <label class="tooltip"><i class='fas fa-sort-alpha-down sort-by-alphabet-design'></i></label><i class="fas fa-check-circle" style="margin-left:10px; font-size:18px;"></i>

      </button>

      <input class="allDatatrue" type="hidden" id="alphasrt" name="alphasrt" value='false'></input>  <!-- wag pakialaman -->

</center>   
    </form>
  </div>
  </div>


</div>
</div>
</div>
<p style="text-align: center; font-size:15px;"><i>*Select any of the export options provided above</i></p>
<script src="js/checkbox-script.js"></script>
</html>



