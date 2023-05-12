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
                
                $year  = $line[0];
                $comp_name = $line[1];
                $date_reg  = $line[2];
                $stat = $line[3];
                $address = $line[4];
                $reg_code = $line[5];
                $categ_list= $line[6];
                
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
                    $Year = mysqli_real_escape_string($db, $year);
                    $name_com = mysqli_real_escape_string($db, $comp_name);
                    $reg_date = mysqli_real_escape_string($db, $date_reg);
                    $stats = mysqli_real_escape_string($db, $stat);
                    $addrss = mysqli_real_escape_string($db, $address);
                    $regcode = mysqli_real_escape_string($db, $reg_code);
                    $categ = mysqli_real_escape_string($db, $categ_list);
                    $db->query("INSERT INTO samp_tbl VALUES ('".$gen_code."', '".$Year."', '".$name_com."', '".$reg_date."', '".$stats."', '".$addrss."', '".$regcode."','".$categ."'");
                        
                    
                    
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