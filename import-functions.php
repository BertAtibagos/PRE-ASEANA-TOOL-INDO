<?php
session_start();
?>

<?php

include_once 'import_samp/dbConfig.php';
$db->query("DELETE FROM samp_tbl");

if(isset($_POST['importSubmit'])){
    
    
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            
            fgetcsv($csvFile);
            
            
            while(($line = fgetcsv($csvFile)) !== FALSE){
                
                $bus_name   = $line[0];
                $taxpyr = $line[1];
                $type  = $line[2];
                $addrs = $line[3];
                $brgy = $line[4];
                $bus_line = $line[5];
                $act= $line[6];
                $regdate = $line[7];
                
                    $insert_stat = false;
                    $insert_ctr = 1;


                    while($insert_stat == false){
                        $sql_count = "SELECT * FROM samp_tbl WHERE ID LIKE '%REG%'";
                        $curr_num =mysqli_num_rows(mysqli_query($db, $sql_count));
                        $gen_code ="REG".rand(10,100).($curr_num + $insert_ctr);
                        $sql_check_dupes = "SELECT * FROM samp_tbl WHERE ID = '$gen_code'";
                        $sql_dupe_rows = mysqli_num_rows(mysqli_query($db, $sql_check_dupes));
                        
                        if($sql_dupe_rows > 0){
                            $insert_ctr++;
                        }else{
                            $insert_stat = true;
                        }
                    }
                    $busname = mysqli_real_escape_string($db, $bus_name);
                    $tax_pyr = mysqli_real_escape_string($db, $taxpyr);
                    $typ = mysqli_real_escape_string($db, $type);
                    $address = mysqli_real_escape_string($db, $addrs);
                    $bargy = mysqli_real_escape_string($db, $brgy);
                    $busline = mysqli_real_escape_string($db, $bus_line);
                    $actv = mysqli_real_escape_string($db, $act);
                    $db->query("INSERT INTO samp_tbl VALUES ('".$gen_code."', '".$busname."', '".$tax_pyr."', '".$typ."', '".$address."', '".$bargy."', '".$busline."','".$actv."',str_to_date('$regdate','%m/%d/%Y'))");
                        
                    
                    
                // }
            }
           
            $db->query("INSERT INTO businessdt_tbl (REG_ID, BUSINESS_NAME, TAXPAYER, TYPE, ADDRESS, BARANGAY, BUSINESS_LINE, ACTIVITY, REG_DATE) SELECT * FROM samp_tbl");
            
            $name = $_SESSION["name"];
            $action = "Imported CSV file";
            $db->query("INSERT INTO act_history_tbl (user_name,user_action) VALUES ('$name','$action')");
            
            
            
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}



header("Location: import-page.php".$qstring);