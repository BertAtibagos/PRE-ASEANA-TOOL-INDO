<?php
session_start();

if(!isset($_SESSION["name"])){
    header("Location:logout.php");
}
?>


</style>
<html>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--submit icon-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    

    <link rel="stylesheet" href="css/font-body.css">
    <link rel="stylesheet" href="css/masterpage-stylesheet.css">

    <head>

        <title>PRE-ASEANA-TOOL</title>
        <link rel="icon" type="image/x-icon" href="icon/indonesia.ico">
        
    </head>

<body class="unselectable">

 
    <div id="mySidebar" class="sidebar shadow" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
    
        <img src="icon\indonesia.png" class ="logo">

        <div style=" position: absolute; font: 15px Arial; top: 20px; left:90px; color: #fff;">
        
            <h4 style="margin-bottom: 2px;  padding: 0; ">Hello,</h4>
            <p style="margin: 0;  padding: 0; color:#FFC150"><?php echo $_SESSION["name"]; ?></p>

        </div>

        <hr style=" border: 1px solid #bcbcbc;" ></hr>
        
            <a id=""  data-src="masterpage-dashboard.php"  onclick="loadFrame(this)" class="tablink">   
                <i class="fa fa-th-large"></i>
                <span class="tablink-text-align">Dashboard</span>
            </a>
        
            <button class="dropdown-btn tablink" style="border:none">
                <i class="fa fa-database"></i>
                <span class="tablink-text-align" style="margin-left:37px"> Data ▾</span>
            </button>

            <div class="dropdown-container" >

                <a id="" data-src="form-page.php"  onclick="loadFrame(this)"  class="tablink">
                    <i class="fas fa-pen"></i>
                    <i class="tablink-text-align">Form</i>
                </a>

                <!-- <a id="" data-src="import_samp/index.php"  onclick="loadFrame(this)" class="tablink"> -->
                <a id="" data-src="import-page.php"  onclick="loadFrame(this)" class="tablink">
                    <i class="fa fa-arrow-up"></i>
                    <i class="tablink-text-align">Import</i>
                </a>

                <a id="" data-src="sort-page.php"  onclick="loadFrame(this)" class="tablink">
                    <i class="fas fa-download"></i>
                    <i class="tablink-text-align">Export</i>
                </a>
                
            </div>

            <a id="" data-src="table-page.php"  onclick="loadFrame(this)" class="tablink">
                <i class="fas fa-table"></i>
                <span class="tablink-text-align">Table</span>
            </a>

            <a id="" data-src="archive-page.php"  onclick="loadFrame(this)"  class=" active tablink" >
                <i class="fas fa-archive"></i>
                <span class="tablink-text-align">Archive</span>
            </a> 
            
            <a id="" data-src="contact-page.php"  onclick="loadFrame(this)"  class="active tablink" >
                <i class="	fa fa-users"></i>
                <span class="tablink-text-align" style="margin-left:31px">Groups</span>
            </a>
            
            <a href="logout.php"  class="active tablink" >
                <i class="fas fa-sign-in-alt"></i>
                <span class="tablink-text-align">Sign out</span>
            </a>

        </div>

    <div  id="main">

    <iframe class="frm-desgn" id="frame1" frameborder="0" scrolling="yes" src="masterpage-dashboard.php"></iframe>  
    
    <p style="text-align: center ;font-size:10px"> © Copyright 2022-2023 First City Providential College | All Rights Reserved </p>
    </div>
    

</body>

<script src="js/formpage_modal_html.js"></script>
<script src="js/sidebar-script.js"></script>
<script src="js/form-validation.js"></script>
<script src="js/loadframe.js"></script>

</html>
