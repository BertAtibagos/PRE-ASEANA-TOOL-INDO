<?php
session_start();

if(!isset($_SESSION["name"])){
    header("Location:logout.php");
}
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--submit icon-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="css/path-name-stylesheet.css">
</head>

<style>



/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
  background-color:none;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* table */

.customers {
font-family: Helvetica;
table-layout:fixed;
text-align:center;
border-collapse: collapse;
font-size:70%;
width: 100%;
}
.customers td, #customers th {
border: 1px solid #27292C;
padding: 8px;
}
.customers tr:nth-child(even){
background-color: #F7D800;
}
.customers th {
padding:12px;
text-align:center;
background-color: #27292C;
color: #fff;
border: 1px solid #949494;
}
.save-changes-cancel-button-design{
  width:49%;
  display: inline; 
  background-color: #393F45;
  color:#fff;
  margin: 0;
  border-radius: 5px;
  border:none;
  padding:3px;

  font-size:15px;
 
}
.change-button-hover:hover {
  background-color: #1877f2;  
}
.cancel-button-hover:hover {
  background-color:  #F0284A;  
}
.select-position{
  position:relative; 
  margin-top:-15px; 
  padding:10px;
}
</style>
<body>

<p class="path-name-height">Menu | Data | 
    <span style="font-weight:bold; font-family: Arial, Helvetica;">
    <i class="fas fa-pen"></i>&nbspForm
    </span>
</p>
<br><br>

<div class="row" style="top:50px; background-color:none; border:1px solid #bbb; border-radius:3px;">

  <form method=POST action="insert-data.php" onsubmit="dataVal()" >
  
      
      <div class="column" >
          
            <p>
                <i class="fa fa-suitcase"></i><label for="Bus_name">&nbsp Business Name</label>
                <input class="w3-input no-outline" type="text" id="Bus_name" name="Bus_name" placeholder="Annaliza's Food Inc.">
            </p>


            <p>
                <i class="fas fa-user-circle"></i><label for="TX_name">&nbsp Name of Taxpayer</label>
                <input class="w3-input no-outline" type="text" id="TX_name" name="TAX_name" placeholder="Annaliz Lizarondo">
            </p>
             
            <p>
                <i class="fas fa-building"></i><label for="business_Type">&nbsp Type of Business</label>
            </p>

                <select class="w3-input no-outline  select-position"  id="business_Type" name="bus_type">
                    <option>Corporation</option>
                    <option>Partnership</option>
                    <option>One Person Corporation</option>
                    <option>Unspecified</option>
                </select>

              
      </div>
      <div class="column">
            <p>
                <i class="fas fa-hammer"></i><label for="business_line">&nbsp Business Line</label>
                <input class="w3-input no-outline" type="text" id="business_line" name="bus_line" placeholder="Services - Other Contractor">
            </p>

            <p>
                <i class="fas fa-dice"></i><label for="act">&nbsp Business Activity</label>
                <input class="w3-input no-outline" type="text" id="act" name="activity" placeholder="Printing Services">
            </p>

            <p>
                <i class="fas fa-calendar-alt"></i><label for="reg_date">&nbsp Date of Registration</label>
                <input class="w3-input no-outline" type="date" id="reg_date" name="reg_date" >
            </p>
      </div>
      <div class="column" >

            <p>
                <i class="fa fa-home"></i><label for="address">&nbsp Street Address</label>
                <input class="w3-input no-outline" type="text" placeholder="Orchid St." id="address" name="address">
            </p>

            <p>
                <i class="fa fa-map-marker"></i><label for="brgy">&nbsp Barangay Address</label>
                <input class="w3-input no-outline" placeholder="Muzon" type="text" placeholder="MUZON" id="brgy" name="brgy">
            </p>
            <br>


              <button class="save-changes-cancel-button-design change-button-hover" type="submit" value="submit"> Save Changes</button>
              <input type="button" class="save-changes-cancel-button-design cancel-button-hover" value="Cancel" onclick=history.back()>


      </div>
    </form>
</div>
 </body>

</html>