$(document).ready(function(){

   checkUncheck();

   $("#deleteForm").on("submit", function(event){
    confirmDeleteData(event);

});

});



function checkUncheck(){
    const boxsingleCheck = '#singleCheckbox';
    const checkboxGroup = ".checkbox-group input[type='checkbox']";

    if($(document).find(boxsingleCheck).length!==0 || $(document).find(checkboxGroup).length!==0){
    $(singleCheckbox).on('click',function(){
        if(this.checked){
            $(checkboxGroup).each(function(){
                this.checked = true;
            });
        }else{
             $(checkboxGroup).each(function(){
                this.checked = false;
            });
        }
    });
    
    $(checkboxGroup).on('click',function(){
        if($(checkboxGroup+':checked').length == $(checkboxGroup).length){
            $(boxsingleCheck).prop('checked',true);
        }else{
            $(boxsingleCheck).prop('checked',false);
        }
    });
}
}
function confirmDeleteData(event){
    if($(".checkbox-group input[type='checkbox']:checked").length > 0){
        var conformation = confirm("Are you sure to archive selected data?");
        if(conformation==false){
            event.preventDefault();
        }
    }else{
        alert('Check at least 1 record to delete.');
        return false;
    }
}