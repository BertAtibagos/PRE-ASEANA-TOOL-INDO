<body class="unselectable">

<style>

table{

width:100%;

}

td{
    padding:8px;
    overflow-wrap: break-word;  
    word-wrap: break-word;   

}
    
</style>

<table class="">
    
                <thead class="thead-dark">

                    <tr>
                        <th>REGISTRATION ID</th>
                        <th>YEAR</th>
                        <th>COMPANY NAME</th>
                        <th>DATE REGISTERED</th>
                        <th>STATUS</th>
                        <th>ADDRESS</th>
                        <th>REGISTRATION CODE</th>
                        <th>LIST OF CATEGORIES</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                        // Get member rows
                        $result = $db->query("SELECT * FROM samp_tbl");
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                    ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['YEAR']; ?></td>
                            <td><?php echo $row['COMPANY_NAME']; ?></td>
                            <td><?php echo $row['DATE_REGISTERED']; ?></td>
                            <td><?php echo $row['STATUS']; ?></td>
                            <td><?php echo $row['ADDRESS']; ?></td>
                            <td><?php echo $row['REGISTRATION_CODE']; ?></td>
                            <td><?php echo $row['CATEGORY_LIST']; ?></td>
                        </tr>
                        <?php } }else{ ?>
                            <tr><td colspan="9" style="height: 50px; font-size: 15px">Import preview will appear here!</td></tr>
                        <?php } ?>
                </tbody>
            </table>


<!-- Show/hide CSV upload form -->
<script>
function formToggle(){
    // var element = document.getElementById(ID);
    // if(element.style.display === "none"){
    //     element.style.display = "block";
    // }else{
    //     element.style.display = "none";
    // }

    if(document.getElementById("file").files.length == 0 ){
        alert("Please choose a file first.");
        event.preventDefault();    
    }
}
</script>

</body>