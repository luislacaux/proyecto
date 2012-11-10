$(document).ready(function(){
  $("#div2").hide('fast');
  $("#div3").hide('fast');
  $("#div4").hide('fast');
  $("#div5").hide('fast');

  $('a#mas1').click(function(){
    $("#div2").show('slow');
    
  });
  $('a#mas2').click(function(){    
    $("#div3").show('slow');
   
  });
  $('a#mas3').click(function(){    
    $("#div4").show('slow');
    
  });
   $('a#mas4').click(function(){    
    $("#div4").show('slow');
   
  });
});