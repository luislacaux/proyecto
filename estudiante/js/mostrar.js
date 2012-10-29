$(document).ready(function(){
  $("#div2").hide();
  $("#div3").hide();
  $('a#mas1').click(function(){
    $("#div2").show('slow');
    
  });
  $('a#mas2').click(function(){    
    $("#div3").show('slow');
    //$("#div2").hide();
  });
});