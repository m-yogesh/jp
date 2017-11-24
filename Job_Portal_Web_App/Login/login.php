<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
        
<meta http-equiv="X-UA-Compatible" content="IE=edge">
      
  <meta name="viewport" content="width=device-width, initial-scale=1">
      
  <title>Bootstrap Login Form Template</title>

 
</head>
<body>
<?php include("../Template/navBar.php")  ?>
<hr/>
<?php include("../Template/headerContent.php")  ?>

<?php include("../Template/jobSeekerPermissionCheck.php")  ?>
<?php include("../Template/userSessionCheck.php")  ?>
<?php include("../Template/employerPermissionCheck.php")  ?>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
         <form method="POST" action="authenticateUser.php">
         <div class="form-login">
            <h4>Welcome back.</h4>
            <input type="text" required id="userName" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="password" required id="password" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
               <input type="submit" value="LOGIN" name="submitLoginForm" id="submitLoginForm"/>
            </span>
            </div>
            </div> 
         </form>
        </div>
    </div>
</div>


<?php include("../Template/footer.php")  ?>
</body>
</html>