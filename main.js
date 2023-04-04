// Login form validation and AJAX request handling
$(document).ready(function() {
  $('#loginForm').submit(function(event) {
    event.preventDefault();
    var email = $('#email').val();
    var password = $('#password').val();
    $.ajax({
      type: 'POST',
      url: 'login.php',
      data: {
        email: email,
        password: password
      },
      success: function(response) {
        console.log(response);
        if (response == 'success') {
          window.location.href = 'profile.php';
        } else {
          alert('Invalid email or password');
        }
      }
    });
  });
});
