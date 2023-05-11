<?php
session_start();

if(!isset($_SESSION["name"])){
    header("Location:logout.php");
}
?>

<html>
    <head>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/contact-page-stylesheet.css">
    <link rel="stylesheet" href="css/font-body.css">
    <link rel="stylesheet" href="css/path-name-stylesheet.css">
    </head>
<body>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


</style>

<body>
<p class="path-name-height">Menu |  
    <span style="font-weight:bold">
        <i class="fa fa-users"></i>&nbspGroups
    </span>
</p><br>

<h2><i class="fa fa-users"></i>&nbspUsers</h2><hr>
<br>
<div class="row">
  <div class="column">

            <div class="container">

            <div class="row">
                    <div class="col-12 ">
                        <div class="our-team">

                            <div class="picture">
                            <img class="img-fluid" src="icon/user_database.png">
                            </div>

                            <div class="team-content">
                                <h3 class="name">Robert Atibagos</h3>
                                <h4 class="title">Database Administrator</h4>
                                <!-- <h4 class="title"><span><i class="fas fa-dot-circle" style="color:#2ABBA7">&nbsp</i></span>Active</h4> -->
                            </div>

                            <ul class="social">

                            <li>
                                <label aria-hidden="true"  style="margin:0">
                                    atibagos.robert2300@gmail.com
                                    <br><br><i style="color:#FFC150">915 302 334</i> 
                                </label>
                            </li>

                            </ul>

                        </div>
                </div>

                
            </div>
            </div>
  </div>
  <div class="column">

        <div class="container">

        <div class="row">
                <div class="col-12 ">
                    <div class="our-team">

                        <div class="picture">
                        <img class="img-fluid" src="icon/user_bracket.png">
                        </div>

                        <div class="team-content">
                            <h3 class="name">Karyle Santos</h3>
                            <h4 class="title">System Administrator</h4>
                            <!-- <h4 class="title"><span><i class="fas fa-dot-circle">&nbsp</i></span>Inactive</h4> -->
                        </div>

                        <ul class="social">

                        <li>
                            <label aria-hidden="true"  style="margin:0">
                                karyleatibagos@gmail.com
                             <br><br><i style="color:#FFC150">917 366 789</i> 
                            </label>
                        </li>


                        </ul>

                    </div>
            </div>

            
        </div>
        </div>
  </div>

  <div class="column">

        <div class="container">

        <div class="row">
                    <div class="col-12 ">
                        <div class="our-team">

                            <div class="picture">
                            <img class="img-fluid" src="icon/user_gear.png">
                            </div>

                            <div class="team-content">
                                <h3 class="name">Ericka Jaed Nuyda</h3>
                                <h4 class="title">System Administrator</h4>
                                <!-- <h4 class="title"><span><i class="fas fa-dot-circle">&nbsp</i></span>Inactive</h4> -->
                            </div>

                            <ul class="social">


                            <li>
                                <label aria-hidden="true"  style="margin:0">
                                    lizarondo12567@gmail.com
                                   <br><br><i style="color:#FFC150">923 888 456</i> 
                                </label>
                            </li>

                            </ul>

                        </div>
                </div>

                
        </div>
        </div>
  </div>

  <div class="column">
        <div class="container">

        <div class="row">
                <div class="col-12 ">
                    <div class="our-team">

                        <div class="picture">
                        <img class="img-fluid" src="icon/user_info.png">
                        </div>

                        <div class="team-content">
                            <h3 class="name">Annaliz Lizarondo</h3>
                            <h4 class="title">System Administrator</h4>
                            <!-- <h4 class="title"><span><i class="fas fa-dot-circle">&nbsp</i></span>Inactive</h4> -->
                        </div>

                        <ul class="social">


                        <li>
                            <label aria-hidden="true"  style="margin:0">
                                annaliz@gmail.com
                                 <br><br><i style="color:#FFC150">905 433 999</i> 
                            </label>
                        </li>

                        </ul>

                    </div>
            </div>

            
        </div>
        </div>


  </div>
</div>

</body>