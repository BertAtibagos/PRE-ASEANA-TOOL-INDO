$(document).ready(function(){
	$('#search').click(function(){
    var name = $('#busi_name').val();
    var date = $('#date').val();
        $.ajax({
            type: 'POST',
            url: 'controller/search-results-funct.php',
            data: {
                name : name,
                date : date
            },
            success: function(result){

                console.log(result)
                
            }
        });

    })
	
});