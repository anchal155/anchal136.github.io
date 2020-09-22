<?php
 
session_start();
if(isset($_POST['login-btn'])){
/* Define username and associated password array */
    
$logins = array('anchal@xyz.com' => '123456','piyush@gmail.com' => 'password1','pooja@amazon.com' => 'password2');


$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (isset($logins[$email]) && $logins[$email] == $password){
$_SESSION['UserData']['email']=$logins[$email];
echo "<span style ='color:red' >email is $email </span>";
exit;
} else {
$msg="<span style='color:red'>Invalid Login Details</span>";
}

}
?>
<html>
    <head>
    
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My login form</title>
         <link href="style1.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        <h1 style= "color:blue";>Sign in to Make purchase</h1>
        <br><br>
        
        <!-- login form -->
         <div class="container">
            <div class="row">
                <div class="col-md-6">
       <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="">
                         <?php 
                         if(isset($msg)){
                             echo $msg;
                         }
                         
                         ?>
                       
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text"  class="form-control" placeholder="Email" id="email" name="email" required=""  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            
                             
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password"  class="form-control" placeholder="password should be of minimum 6 characters" name="password" id="password" required=""  pattern=".{6,}">
                           
                        </div> 
                            
                     <div>
                    <input type="submit" name="login-btn" value="Login" class="btn btn-primary">
                </div>
                    </form>
                        
           <div class="panel-footer">Dont have an account? <a href="signup.php">Click here to Sign Up</a></div>
       </div>
                </div>
            </div>
          </div>
        
    </body>
</html>
