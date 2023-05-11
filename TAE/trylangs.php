<div class="row" style="top:50px; background-color:none; border:1px solid #bbb; border-radius:3px;">

  <form method=POST action="insert-data.php" onsubmit="dataVal()" >
  
      
      <div class="column" >
          
            <p>
                <i class="fa fa-suitcase"></i><label for="Bus_name">&nbsp Business Name</label>
                <input class="w3-input no-outline" type="text" id="Bus_name" name="Bus_name" placeholder="Annaliza's Food Inc.">
            </p>


            <p>
                <i class="fas fa-user-circle"></i><label for="TX_name">&nbsp Name of Taxpayer</label>
                <input class="w3-input no-outline" type="text" id="TX_name" name="TAX_name" placeholder="Annaliz Lizarondo">
            </p>
             
            <p>
                <i class="fas fa-building"></i><label for="business_Type">&nbsp Type of Business</label>
            </p>

                <select class="w3-input no-outline"  id="business_Type" name="bus_type">
                    <option>Corporation</option>
                    <option>Partnership</option>
                    <option>One Person Corporation</option>
                    <option>Unspecified</option>
                </select>

              
      </div>
      <div class="column">
            <p>
                <i class="fas fa-hammer"></i><label for="business_line">&nbsp Business Line</label>
                <input class="w3-input no-outline" type="text" id="business_line" name="bus_line" placeholder="Services - Other Contractor">
            </p>

            <p>
                <i class="fas fa-dice"></i><label for="act">&nbsp Business Activity</label>
                <input class="w3-input no-outline" type="text" id="act" name="activity" placeholder="Printing Services">
            </p>

            <p>
                <i class="fas fa-calendar-alt"></i><label for="reg_date">&nbsp Date of Registration</label>
                <input class="w3-input no-outline" type="date" id="reg_date" name="reg_date" >
            </p>
      </div>
      <div class="column" >
      
            <p>
                <i class="fas fa-calendar-alt"></i><label for="reg_date">&nbsp Date of Registration</label>
                <input class="w3-input no-outline" type="date" id="reg_date" name="reg_date" >
            </p>

            <p>
                <i class="fa fa-home"></i><label for="address">&nbsp Street Address</label>
                <input class="w3-input no-outline" type="text" placeholder="Orchid St." id="address" name="address">
            </p>

            <p>
                <i class="fa fa-map-marker"></i><label for="brgy">&nbsp Barangay Address</label>
                <input class="w3-input no-outline" placeholder="Muzon" type="text" placeholder="MUZON" id="brgy" name="brgy">
            </p>


              <button class="save-changes-cancel-button-design change-button-hover" type="submit" value="submit"> Save Changes</button>
              <button class="save-changes-cancel-button-design cancel-button-hover" value=""> Cancel</button>


      </div>
    </form>
</div>