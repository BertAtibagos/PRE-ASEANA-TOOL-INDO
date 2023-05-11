<?php
session_start();
?>

<?php
// Load the database configuration file
include_once 'dbConfig.php';

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $bus_name   = $line[0];
                $taxpyr = $line[1];
                $type  = $line[2];
                $addrs = $line[3];
                $brgy = $line[4];
                $bus_line = $line[5];
                $act= $line[6];
                $regdate = $line[7];
                
                // Check whether member already exists in the database with the same email
                // $prevQuery = "SELECT id FROM members WHERE email = '".$line[1]."'";
                // $prevResult = $db->query($prevQuery);
                
                // if($prevResult->num_rows > 0){
                    // Update member data in the database
                //     $db->query("UPDATE members SET name = '".$name."', phone = '".$phone."', status = '".$status."', modified = NOW() WHERE email = '".$email."'");
                // }else{
                    // Insert member data in the database
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


                    $db->query("INSERT INTO samp_tbl VALUES ('".$gen_code."', '".$bus_name."', '".$taxpyr."', '".$type."', '".$addrs."', '".$brgy."', '".$bus_line."','".$act."','".$regdate."')");
                // }
            }
            // $name = $_SESSION["name"];
            // $action = "Added data (".$gen_code.")";
            $db->query("INSERT INTO businessdt_tbl (REG_ID, BUSINESS_NAME, TAXPAYER, TYPE, ADDRESS, BARANGAY, BUSINESS_LINE, ACTIVITY, REG_DATE) SELECT * FROM samp_tbl");
            // $db->query("INSERT INTO act_history_tbl (user_name,user_action) VALUES ('$name','$action')");
            
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}


// Redirect to the listing page
header("Location: index.php".$qstring);