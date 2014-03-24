$( document ).ready(function() {

var d = new Date();
$.ajax({
  url: "logged_in.php?user_id="+$("#user_id").html()+"&comm=Log at "+d.getTime()
});


$("#logout").click(function() {
var d = new Date();
  $.ajax({
    url: "logged_out.php?user_id="+$("#user_id").html()+"&comm=Bye at "+d.getTime()
  });
});


});

