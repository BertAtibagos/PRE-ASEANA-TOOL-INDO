<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','businessdt_db') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:masterpage.php");
    }
?>

<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/font-body.css">

<title>PRE-ASEANA-TOOL</title>
<link rel="icon" type="image/x-icon" href="icon/database-table.ico">
</head>
<style>


.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #1E1E1E;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 12%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 45%; 
    }

    .sidenav{
        width:45%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 45%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 10%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #1e1e1e !important;
    color: #fff;
}
.btn-black:hover{
    background-color: #2196F3 !important;
    color: #fff;
}
/* .login-notif{
    background-color: #f05b5b;
    border:solid #f70000;
    border-radius: 5px;
    display:none;
} */
</style>
<head>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="dataval-script.js"></script>
</head>
<body>


<div class="sidenav">
    <img src="icon/database-table.png" width=143 height=auto style="position:relative; top:115px; left:55px">
         <div class="login-main-text">
            <p style="margin:0">pre</p>
            <h2>ASEANA<br>Management Information System</h2>
            <p>Login from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form name="frmUser" method="post" action="">
               <div class="message"><?php if($message!="") { echo $message; } ?></div>
                  <div class="form-group">
                     <label>Enter Username</label>
                     <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Username">
                  </div>
                  <div class="form-group">
                     <label>Enter Password</label>
                     <input type="password" class="form-control" id="passwrd" name="password" placeholder="Password">
                  </div>
                  <input type="submit" name="submit" class="btn btn-black" value="Login">
                 
               </form>
               <!-- <div class="login-notif">
                <p>Incorrect Username or Password.</p>
               </div> -->
            </div>
         </div>
      </div>
</body>
</html>      

