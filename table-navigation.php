<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/table-navigation-stylesheet.css">

</head>
<!-- buttons -->
<style>

.btn-size {

  height:30px;
  border-radius:3px;
  color:#fff;    
  background-color:#393F45;
  transition: color 0.2s ease-in-out, background 0.2s ease-in-out;
  border:none;
}

.btn-size:hover {

 background-color: #1877f2;
}

a {

  text-decoration:none;

}

.search-btn:hover{
 background-color: #687078;
}

.export {
  position:relative; left:0px;width:47%;  max-width: 100%; 

}
.export:hover {
background-color: #2abba7;
}

.refresh  {
  position:relative;
  float:right;
  width:50%;
  max-width: 100%
}


  </style>
<body>
  

<div class="row">


  <form action="new-srch-result-funct.php" method=POST name="search" role="search" >

    <div class="column">
      <p class="">
        <input class="input-width" type="search" name="srch_entry" id="busi_name search"  placeholder="SOLAR PHIL" oninput="this.value = this.value.toUpperCase()" required/>
      </p>
    </div>

    <div class="column">
    <p class="">
        <label for="categories" class="">&nbspin</label>
        <select name="srch_fld" id="categories" style="width:93%;   height:30px;">
          <option value="REG_ID">Registration ID</option>
          <option value="BUSINESS_NAME" selected>Business Name</option>
          <option value="TAXPAYER">Taxpayer</option>
          <option value="TYPE">Type</option>
          <option value="ADDRESS">Address</option>
          <option value="BUSINESS_LINE">Business Line</option>
          <option value="ACTIVITY">Activity</option>
          <option value="REG_DATE">Registered Date</option>
          
        </select>
      </p>
    </div>

    <div class="column">
      <p class="">
        <button  class="btn-size search-btn"  id="search" >
         <i class="fas fa-search"></i>
          <span>Search</span>

        </button>
       </p>
    </div>

  </form>

    <div class="column" >
      <!-- <input class="btn-size" style="float:right; margin-left:30px;"  type="submit" name="deleteAll" value="Delete All" class=""> -->
    </div>

    <div class="column">

      <div>

      <a href="sort-page.php" data-src="" class=""><button class="btn-size export" style="">

        <label>
          <i class="fa fa-arrow-down" ></i>
          <span>&nbsp Export</span>
        </label>

        </button></a>

        <a href="table-page.php" class=""><button class="btn-size refresh" style="">

        <label>
          <i class="fas fa-sync-alt"></i>
         <span>&nbsp Refresh</span>
        </label>

        </button></a>
        
      </div>

    </div>

</div>

</body>
</html>

            


   