function dataVal(){
    var submit_stat = false;
    var Bus_name = document.getElementById("busi_name").value;
    var reg_date = document.getElementById("reg_date").value;

    if(Bus_name == "" && reg_date == ""){
        alert("Some fields are required.");
    } else {
        submit_stat = true;
    }
    
    if(submit_stat == true){
        header('Refresh: 1');
    } else {
        event.preventDefault();
    }
}
function logindataVal(){
    var submit_stat = false;
    var username = document.getElementById("username").value;
    var passwrd = document.getElementById("passwrd").value;

    if(username == "" && passwrd == ""){
        alert("Some fields are required.");
    } else {
        submit_stat = true;
    }
    
    if(submit_stat == true){
        header('Refresh: 1');
    } else {
        event.preventDefault();
    }
}