// $(document).ready(function(){
//     $(".disp-table").load("controller/display-data-function.php");

//     var name = $('#busi_name').val();
//     var date = $('#date').val();

//     $("#search").on('click',function(){
        
//         $.ajax({
//             url:'controller/search-results-funct.php',
//             type: 'POST',
//             data:{
//                 name:name,
//                 date:date,
//             }, 
//             success:function(response){
//             }
//         })
//     });
    
// });

$(document).ready(function(){



    $(".disp-table").load("controller/display-data-function.php");


    
    // var name = $('#busi_name').val();
    // var date = $('#date').val();
	// $('.search').on('click')
	// $.ajax({
	// 	type: 'POST',
	// 	url: 'controller/search-results-funct.php',
	// 	data: {
	// 		name : name,
    //         date : date
	// 	},
	// 	success: function(result){
	// 		console.log(result)
			// $.ajax({
			// 	type:'GET',
			// 	url: '../../model/forms/myaccount/profile-image-controller.php',
			// 	success: function(data){
			// 		$('#profile-picture').html(data);
			// 	},
			// });

			// var ret = JSON.parse(result);
			// var tblprofile = '';
			// var tblotherinfo = '';
			// if(ret.length){
			// 	if(type == 'STUDENT'){
			// 		$.each(ret, function(key, value) {
						
			// 			tblprofile += "<tr>" + 
			// 				"<td rowspan='5' style='width: 15%;'>"+
			// 					"<div id='profile-picture' class='align-items-center' style=''></div>"+
			// 				"</td>" + 
			// 				"<td style='font-size:14px; width: 10vw; text-align: left;'>Student ID:</td>" + 
			// 				"<td style='font-size:14px; text-align: left;'> "+ value.IDNO +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 					"<td style='font-size:14px; width: 10vw; text-align: left;'>LRN:</td>" + 
			// 					"<td style='font-size:14px; text-align: left;'> "+ value.LRN +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 					"<td style='font-size:14px; width: 10vw; text-align: left;'>NAME:</td>" + 
			// 					"<td style='font-size:14px; text-align: left;'> "+ value.NAME +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 					"<td style='font-size:14px; width: 10vw; text-align: left;'>Grade/Section:</td>" + 
			// 					"<td style='font-size:14px; text-align: left;'> "+ value.SEC +" ("+ value.YRLVL +") </td>" + 
			// 				"</tr>";
						
			// 			tblotherinfo += "<tr>" +
			// 				"<td  colspan='2' style='width: 100vw; text-align: left; font-size: 20px; text-decoration: underline;'>Other Information</td>" +
			// 				"<td  colspan='2' style='width: 100vw; text-align: left; font-size: 20px; text-decoration: underline;'>Contact Information</td>" +
			// 				"</tr>" + 
			// 				"<tr>" +  
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Gender:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.GENDER +" </td>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Email:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.EMAIL +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Age:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.AGE +" YEARS OLD </td>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Mobile No.:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.MOBNO +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Birthday:</td>" + 
			// 				"<td style='font-size:12px; text-align: left; text-transform: uppercase;'> "+ value.BDAY +" </td>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Telephone No.:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.TELNO +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Birthplace:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.BPLACE +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Religion:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.RELIGION +" </td>" + 
			// 				"<td  colspan='2' style='width: 100vw; text-align: left; font-size: 20px; text-decoration: underline;'>Addresses</td>" +
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Civil Status:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.CIVIL_STAT +" </td>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Present Address:</td>" + 
			// 				"<td rowspan='2' style='font-size:12px; text-align: left;'> "+ value.PRES_ADD +", <br>"+ value.PRES_BRGY_NAME +", "+ value.PRES_MUN_NAME +", "+ value.PRES_PROV_NAME +"<br>"+ value.PRES_ZIP +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Nationality:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.NATION +" </td>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'></td>" + 
			// 				"<td style='font-size:12px; text-align: left;'></td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'></td>" + 
			// 				"<td style='font-size:12px; text-align: left;'></td>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Permanent Address:</td>" + 
			// 				"<td rowspan='2' style='font-size:12px; text-align: left;'> "+ value.PERM_ADD +", <br>"+ value.PERM_BRGY_NAME +", "+ value.PERM_MUN_NAME +", "+ value.PERM_PROV_NAME +"<br>"+ value.PERM_ZIP +" </td>" +
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'></td>" + 
			// 				"<td style='font-size:12px; text-align: left;'></td>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'></td>" + 
			// 				"<td style='font-size:12px; text-align: left;'></td>" + 
			// 				"</tr>";
			// 		});
			// 	} else if(type == 'EMPLOYEE'){
			// 		$.each(ret, function(key, value) {

			// 			$('#fullname').text(value.NAME);
			// 			$('#gradeSec').text(value.JOBPOS_NAME);
			// 			$('#gender').text(value.GENDER);
			// 			$('#age').text(value.AGE + " YEARS OLD");
			// 			$('#birthday').text(value.BDAY);
			// 			$('#birthplc').text(value.BPLACE);
			// 			$('#religion').text(value.RELIGION);
			// 			$('#civilStat').text(value.CIVIL_STAT);
			// 			$('#nationality').text(value.NATION);
			// 			$('#email').text(value.EMAIL);
			// 			$('#mobileNo').text(value.MOBNO);
			// 			$('#telNo').text(value.TELNO);
			// 			$('#presAdd').text(value.PRES_ADD +", "+ value.PRES_BRGY_NAME +", "+ value.PRES_MUN_NAME +", "+ value.PRES_PROV_NAME +", "+ value.PRES_ZIP);
			// 			$('#permAdd').text(value.PERM_ADD +", "+ value.PERM_BRGY_NAME +", "+ value.PERM_MUN_NAME +", "+ value.PERM_PROV_NAME +", "+ value.PERM_ZIP);
			// 			$('#studNo').text(value.EMP_ID);
			// 			$('#lrn').text(value.DEPT_NAME);
			// 			$(".user1").text("Employee ID:");
			// 			$(".user2").text("Department Name:");
			// 			$( window ).resize(function() {
			// 				if($( window ).width() < 767){
			// 					$(".4").text("Job");
			// 			   }else{
			// 				$(".4").text("Job Information");
			// 			   }
			// 			});
			// 			$(document).ready(function(){
			// 				if(($( window ).width() < 767)){
			// 					$(".4").text("Job");
			// 				}else{
			// 					$(".4").text("Job Information");
			// 				}
			// 			});
						
			// 			tblprofile += "<tr>" + 
			// 				"<td rowspan='5' style='width: 15%;'>"+
			// 					"<div id='profile-picture' class='align-items-center' style=''></div>"+
			// 				"</td>" + 
			// 				"<td style='font-size:14px; width: 10vw; text-align: left;'>Position:</td>" + 
			// 				"<td style='font-size:14px; text-align: left;'> "+ value.JOBPOS_NAME +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 					"<td style='font-size:14px; width: 10vw; text-align: left;'>Department:</td>" + 
			// 					"<td style='font-size:14px; text-align: left;'> "+ value.DEPT_NAME +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 					"<td style='font-size:14px; width: 10vw; text-align: left;'>Employee ID:</td>" + 
			// 					"<td style='font-size:14px; text-align: left;'> "+ value.EMP_ID +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 					"<td style='font-size:14px; width: 10vw; text-align: left;'>Employee Name:</td>" + 
			// 					"<td style='font-size:14px; text-align: left;'> "+ value.NAME +" </td>" + 
			// 				"</tr>" +
			// 				"<tr hidden>" + 
			// 					"<td style='font-size:14px; width: 10vw; text-align: left;'>Suffix</td>" + 
			// 					"<td style='font-size:14px; text-align: left;'> -- </td>" + 
			// 				"</tr>";
						
			// 			tblotherinfo += "<tr>" +
			// 				"<td  colspan='2' style='width: 100vw; text-align: left; font-size: 20px; text-decoration: underline;'>Other Information</td>" +
			// 				"<td  colspan='2' style='width: 100vw; text-align: left; font-size: 20px; text-decoration: underline;'>Contact Information</td>" +
			// 				"</tr>" + 
			// 				"<tr>" +  
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Gender:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.GENDER +" </td>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Email:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.EMAIL +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Age:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.AGE +" YEARS OLD </td>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Mobile No.:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.MOBNO +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Birthday:</td>" + 
			// 				"<td style='font-size:12px; text-align: left; text-transform: uppercase;'> "+ value.BDAY +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Birthplace:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.BPLACE +" </td>" + 
			// 				"<td  colspan='2' style='width: 100vw; text-align: left; font-size: 20px; text-decoration: underline;'>Addresses</td>" +
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Civil Status:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.CIVIL_STAT +" </td>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Present Address:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.PRES_ADD +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Citizenship:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.CTZ +" </td>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Permanent Address:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.PERM_ADD +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Email:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.EMAIL +" </td>" + 
			// 				"</tr>" +
			// 				"<tr>" + 
			// 				"<td style='font-size:12px; width: 10vw; text-align: left;'>Mobile No.:</td>" + 
			// 				"<td style='font-size:12px; text-align: left;'> "+ value.MOBNO +" </td>" + 
			// 				"</tr>";
			// 		});
			// 	} else {
			// 		alert('ERROR! Pls contact ICT DEPARTMENT!');
			// 	}
			// } else {
			// 	tblotherinfo = tblprofile = "<tr>" +
			// 					"<td colspan='4' " + 
			// 						"style='font-size: 18px;" + 
			// 						"font-family: Roboto, sans-serif;" + 
			// 						"font-weight: normal;" + 
			// 						"text-decoration: none;" + 
			// 						"color: red;'>" +
			// 					"No Record Found" +
			// 					"</td>" +
			// 					"</tr>";
			// }
			
			// $('#tbody-profile tr').remove();
			// $('#tbody-profile').html(tblprofile);
			// $('#tbody-other-info tr').remove();
			// $('#tbody-other-info').html(tblotherinfo);
			
	// 	}
	// });
	
});