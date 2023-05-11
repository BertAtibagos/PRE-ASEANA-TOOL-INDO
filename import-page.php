<?php
 session_start();

 if(!isset($_SESSION["name"])){
    header("Location:logout.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="css/font-body.css">
<link rel="stylesheet" href="css/table-design-stylesheet.css">
<link rel="stylesheet" href="css/path-name-stylesheet.css">
<link rel="stylesheet" href="css/import-page-stylesheet.css">

</head>

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

.cloud-design{
    font-size:100px;
    color:#aeaeae;
}
.align-center{
    margin: auto;
  width: 50%;
}

.import-preview-title {
    position: relative;
    top:15px;
    font-size: 25px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight:bold;
    margin-bottom:20px;
}
.upl-btn{
 position:relative;
  padding:5px;
  width:50%;
  background-color:#D9DADF;
  font-size:10px;
  margin-top:6px;
  color:#27292C;
  cursor: pointer;
  margin-left:-10px;
  border-radius:3px;
  font-size:17px;
  border: solid 1px #aeaeae;
}

input[type=file]::file-selector-button {
  margin-right: 20px;
  border: none;
  background: #687078;
border-radius:3px;
  color: #fff;
  padding:3px 15px;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background:#393F45 ;
}

.imp-btn{
 position:relative;
  padding:5px;
  width:30%;
  background-color:#f0284a;
  font-size:20px;
  margin-top:6px;
  height:40px;
  color:#fff;
  cursor: pointer;
  transition: color 0.2s ease-in-out, background 0.2s ease-in-out;
  margin-left:-10px;
  border-radius:0px 8px 8px 0px;
  font-size:15px;
  border: none;
}
.sub-btn:hover{
  background-color:#f23a59;
  color:#fff;
}
</style>




<?php
// Load the database configuration file
include_once 'import_samp/dbConfig.php';

// Get status message
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'CSV file imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>

<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12" style="color: #90d190; font-weight: bold; text-align: center">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>

<p class="path-name-height">Menu | 
        <span style="font-weight:bold">
            <i class="fa fa-arrow-up"></i>&nbspImport
        </span>
    </p><br><br>

    <div class="import-box">
        <center><br>
        <i class="fas fa-cloud-upload-alt cloud-design"></i><br>

        <p>Choose a CSV File from your computer</p>

        <div class="row">
            <div class="col-md-12" id="importFrm">
                <form action="import-functions.php" method="post" enctype="multipart/form-data">
                    <input class="upl-btn" type="file" name="file" id="file">
                    <button type="submit" class="imp-btn sub-btn" name="importSubmit" onclick="formToggle()" value="Submit">Submit</button>
                    <!-- <input type="submit" class="btn btn-primary" name="importSubmit" onclick="formToggle()" value="Submit"> -->
                </form>
            </div>
        </div>
</center>
    </div>
    
    <br><br>

    <h2 style="margin:0"class="imports-preview-title">
    <i class="fas fa-tv"></i><label>&nbsp Import Preview</label></h2>

        <p>
            <i class="far fa-lightbulb">&nbsp Most recent uploads shown below:</i>
            <div style="float:right">Showing all <?php include 'all-entries.php';
            all_entries();
            ?> imported entries </div>
        </p>
          


    <!-- Data list table -->

<div class="table-box">


    <?php
    include 'import-preview.php';
    ?>

</div>
</html>