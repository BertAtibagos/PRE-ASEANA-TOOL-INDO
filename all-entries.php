<?php 
           

            function all_entries(){
            include 'controller/connection.php';

            $sql="SELECT COUNT(*) AS all_no FROM samp_tbl ";
            $success=mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($success)){
              echo'<b>'.$row['all_no'].'</b>';
            }
            }
            ?>