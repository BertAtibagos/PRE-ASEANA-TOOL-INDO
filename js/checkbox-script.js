$(document).ready(function(){
  $(".allsort").hide();
  $(".defaultsrt").click(function(){
    $(".allDatatrue").val('true');
    $(".defaultsrt").hide();
    $(".allsort").show();
  })

  $(".allsort").click(function(){
    $(".allDatatrue").val('false');
    $(".allsort").hide();
    $(".defaultsrt").show();
  })
// specific years
  $(".allsortspc").hide();
  $(".defaultsrtspc").click(function(){
    $(".allDatatrue").val('true');
    $(".defaultsrtspc").hide();
    $(".allsortspc").show();
  })

  $(".allsortspc").click(function(){
    $(".allDatatrue").val('false');
    $(".allsortspc").hide();
    $(".defaultsrtspc").show();
  })
// between years
  $(".allsortbtw").hide();
  $(".defaultsrtbtw").click(function(){
    $(".allDatatrue").val('true');
    $(".defaultsrtbtw").hide();
    $(".allsortbtw").show();
  })

  $(".allsortbtw").click(function(){
    $(".allDatatrue").val('false');
    $(".allsortbtw").hide();
    $(".defaultsrtbtw").show();
  })
});