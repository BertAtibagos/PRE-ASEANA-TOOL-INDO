<?php
session_start();

if(!isset($_SESSION["name"])){
    header("Location:logout.php");
}
?>

<html>
<style>
/* width */
::-webkit-scrollbar {
  width: 8px;

}

/* Track */
::-webkit-scrollbar-track {
  background: #eee; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
  border-radius:3px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #27292C; 
}
</style>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/display-script.js"></script>

<link rel="stylesheet" href="css/font-body.css">
<link rel="stylesheet" href="css/table-navigation-stylesheet.css">
<link rel="stylesheet" href="css/path-name-stylesheet.css">

</head>

<style>
.btn-size{
height:30px;
}

.search-btn{

}

.export{

}

.refresh{

}
.check_all{
    border:none;
}
.action_bttn{
    border:none;
}
</style>

<body class="unselectable">


<?php
include('table-button-up.php')
?>
    
    <p class="path-name-height">Menu | 
        <span style="font-weight:bold">
            <i class="fas fa-table"></i>&nbspTable
        </span>
    </p><br>
    
    <div>
    <?php
        include 'table-navigation.php';
        ?>
    </div>

    
<br>
   <div>
    <?php
        include 'table-records.php';
        ?>
    </div>


</body>

</html>
