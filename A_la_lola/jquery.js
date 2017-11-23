$(document).ready(function() {
  
 $('#pizza_button').on('click', function(e) {   
    if($('#hide_pizza').is(":visible")){
      $('#hide_pizza').hide();
      $('#pizza_button').css({"background-color": "#C8C8C8"});
    }
   else{
    $('#hide_pizza').show();
    $('#hide_ziti').hide();
    $('#ziti_button').css({"background-color": "#C8C8C8"});
   $('#hide_grinder').hide();
   $('#grinder_button').css({"background-color": "#C8C8C8"});
    $('#pizza_button').css({"background-color": "purple"})
   }
  }
)
  $('#ziti_button').on('click', function(e) {    
     if($('#hide_ziti').is(":visible")){
      $('#hide_ziti').hide();
      $('#ziti_button').css({"background-color": "#C8C8C8"});
    }
   else{
      $('#hide_pizza').hide();
    $('#pizza_button').css({"background-color": "#C8C8C8"});
   $('#hide_grinder').hide();
   $('#grinder_button').css({"background-color": "#C8C8C8"});
    $('#hide_ziti').show();
    $('#ziti_button').css({"background-color": "purple"})
   }
      })
       $('#grinder_button').on('click', function(e) {
      if($('#hide_grinder').is(":visible")){
      $('#hide_grinder').hide();
      $('#grinder_button').css({"background-color": "#C8C8C8"});
    }
   else{
      $('#hide_pizza').hide();
    $('#pizza_button').css({"background-color": "#C8C8C8"});
   $('#hide_ziti').hide();
   $('#ziti_button').css({"background-color": "#C8C8C8"});
    $('#hide_grinder').show();
    $('#grinder_button').css({"background-color": "purple"})
   }
  });
   })
