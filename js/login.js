// Input Fields
var lemail =  $('#email');
var lpassword =  $('#password');

// When the login button is clicked
$(document).on('click', '.lognBtn', function(e) {
  e.preventDefault();

  var request = $.ajax({
    url: "core.php",
    type: "POST",
    data: {email : lemail.val(),password :lpassword.val(), login : "login"},
    dataType: "html"
  });

  request.done(function(feeback){
    console.log(feeback);
    if (feeback == 0 ) 
    {
      $('.msg').html("Incorrect Credentials");
    }
      else if(feeback == 1)
    {
      window.location="dashboard.php";
    }
  });

  request.fail(function(jqXHR, textStatus){
    console.log("failed");
  });

});