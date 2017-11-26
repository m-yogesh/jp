<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
        
<meta http-equiv="X-UA-Compatible" content="IE=edge">
      
  <meta name="viewport" content="width=device-width, initial-scale=1">
      
  <title>Login</title>

 
</head>
<body>
<?php //include("../Template/userSessionCheck.php")  ?>
<?php include("../Template/TokenGenerate.php")?>
<?php include("../Template/navBar.php")  ?>
<hr/>
<?php //include("../Template/headerContent.php")  ?>

<?php //include("../Job_Seeker/jobSeekerPermissionCheck.php")  ?>

<?php //include("../Template/employerPermissionCheck.php")  ?>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<?php
session_start();
$token = new TokenGenerate;
$token->getToken();

// if($_SERVER["REQUEST_METHOD"] == "POST") {
//     echo("Request method equal POST");
//     if (!empty($_POST["submitLoginForm"])) {
//         echo ("Form has been submitted");
//         if(!$token->checkToken($_POST["token"])){
//             echo"NOT CONNECTED TO ACCOUNT!!!";
//             header('Location: login.php');
//             exit();
//         }else{
//             $security = new Security;
//             $username = $security->sanitizationInput($_POST["userName"]);
//             echo"<script>alert('Check 3: $username');</script>";
//             $username = $security->validateEmail($_POST["userName"]);
//             echo"<script>alert('Check 3: $username');</script>";
//             $password = $security->sanitizationInput($_POST["password"]);
//             echo"<script>alert('Check 3: $username');</script>";
//             $connectionDB = new databaseClass;
//             $statement = $connectionDB->connect()->prepare("SELECT user_email,user_password FROM jp_user WHERE (?, ?)");
//             $statement->bindParam(1, $username);
//             $statement->bindParam(2, $password);
//             $result = $connectionDB->query($statement);
//             $numRows = $result->num_rows;
//             if($numRows > 0){
//                 echo"<script>alert('CONNECTED TO ACCOUNT!!!');</script>";
//             }
//         }
//     }

// }

?> 




<section class="align-middle">
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
         <form method="POST" action="authenticateUser.php">
            <div class="form-login">
                    <h4>LOGIN</h4>
                    <input type="email" required id="userName" name="userName" class="form-control input-sm chat-input" placeholder="username" />
                     </br>
                    <input type="password" required id="password" name="password" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" class="form-control input-sm chat-input" placeholder="password" />
                    </br>
                <select required name="category">
                <option value="" disabled selected>Select a type</option>
                    <option value="SEEKER">Job Seeker</option>
                    <option value="EMPLOYER">Employer</option>
                </select>
                    <br/>
                    <br/>
                    <div class="wrapper">
                        <span class="group-btn">     
                            <input type="submit" value="LOGIN" name="submitLoginForm" id="submitLoginForm"/>
                        </span>
                    </div>
            </div> 
         </form>
        </div>
        <?php
            if( $_SESSION["loginErrorMsg"]!= null){
                $errorMessage  =  $_SESSION["loginErrorMsg"];
        ?>
        <section>
            <div class="alert alert-danger">
        <?php
             echo($errorMessage);
             $_SESSION["loginErrorMsg"] = null;
        ?>
            </div>
      </section>
    <?php
      }
  ?>

    </div>
</div>
</section>


<?php include("../Template/footer.php")  ?>
</body>
</html>