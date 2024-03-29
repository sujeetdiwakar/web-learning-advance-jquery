
<html>  
 <head>  
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">  
  <meta charset="utf-8">  
  <title>Show/Hide password field</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 </head>  
 <body>  
  <div class="container" style="margin-top: 200px; width:500px; border:1px solid #ccc;">  
   <br />  
   <h2 align="center">Login</h2>  
   <form id="login_form">  
    <label>Username</label>  
    <input type="text" name="username" id="username" placeholder="Username" class="form-control" />  
    <br />  
    <label>Password</label>  
    <input type="password" name="password" id="password" placeholder="Password" class="form-control" />  
    <br />  
    <button type="button" id="show_password" name="show_password" class="btn btn-default">Show Password</button>  
   </form>  
   <br />                 
  </div>  
 </body>  
</html>  
<script>  
$(document).ready(function(){  
 $('#show_password').on('click', function(){  
  var passwordField = $('#password');  
  var passwordFieldType = passwordField.attr('type');
  if(passwordField.val() != '')
  {
   if(passwordFieldType == 'password')  
   {  
    passwordField.attr('type', 'text');  
    $(this).text('Hide Password');  
   }  
   else  
   {  
    passwordField.attr('type', 'password');  
    $(this).text('Show Password');  
   }
  }
  else
  {
   alert("Please Enter Password");
  }
 });  
});  
</script>
