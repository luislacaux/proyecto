$(document).ready(function(){
  $("#div2").hide('fast');
  $("#div3").hide('fast');
  $('a#mas1').click(function(){
    $("#div2").show('slow');
    
  });
  $('a#mas2').click(function(){    
    $("#div3").show('slow');
    //$("#div2").hide();
  });
});