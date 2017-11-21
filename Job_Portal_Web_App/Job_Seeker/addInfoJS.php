<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
        
<meta http-equiv="X-UA-Compatible" content="IE=edge">
      
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../Resources/css/profilePicture.css">
  <script src="../Resources/js/profilePicture.js"></script>
  <title>Add information to profile</title>

 
</head>
<body>
<?php
include("../Template/userSessionCheck.php");
include("../Template/jobSeekerPermissionCheck.php");  
include("../Template/navBar.php");
?>
<section id="addInfoJs">
<div class="container">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <h2>Add your basic information so that Employer can see.</h2>

      <form action="" method="post" enctype="multipart/form-data">
          <div>
              <!--Upload CV-->
                Upload CV/Resume: &nbsp;&nbsp;
                    <label class="custom-file">
                    <input type="file" id="file" accept="application/pdf" name="Upload your CV/Resume" class="custom-file-input">
                    <span class="custom-file-control"></span>
                    <br> 
                    </label>
                    <hr>
                    <br> 

                    <!-- Set profile picture -->
                   Upload your profile picture: &nbsp; &nbsp;
                   <input type='file' id="profilePictureFile" accept="image/*" onchange="readURL(this);" />
                   <br> <br>
                   Get a preview of your uploaded image:
                    <img id="profilePictureImg" src="http://placehold.it/180" alt="your image" />
                 <hr>
                  
                 <!-- Set a status -->
                 <div class="form-group">
                    <label for="sel1">Status:</label>
                        <select class="form-control" id="status">
                            <option value="" selected disabled>Select an option:-</option>
                            <option value="employed">Employed</option>
                            <option value="unemployed">Unemployed</option>
                        </select>
                    </div>
                    <br>
                     <!-- Set a date of birth -->
                    <div class="form-group">
                        <label for="example-date-input" class="col-2 col-form-label">Date of birth:</label>
                            <div class="col-10">
                                <input class="form-control" type="date" id="date_slot">
                            </div>
                            <br/>
                             <!-- Set a Gender -->
                             <div class="form-group">
                    <label for="sel1">Gender:</label>
                        <select class="form-control" id="gender">
                            <option value="" selected disabled>Select an option:-</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <br/>
            <!-- set Career objectives -->
            <div class="form-group">
                    <label for="sel1">Career Objectives:</label>
                    <textarea maxlength="255" rows="4" cols="50" placeholder="Enter the objective of your career" id="myTextarea"></textarea>
                    <p id="counter"></p>
                    
                    <script type="text/javascript">
                    $('#myTextarea').keyup(function () {
                        var left = 255 - $(this).val().length;
                        if (left < 0) {
                            left = 0;
                        }
                        $('#counter').text('Characters left: ' + left);
                    });
                    </script>
                    </div>
                    <!-- Nationality -->
                    <div class="form-group">
  <label for="example-text-input" class="col-2 col-form-label">Nationality:</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="Enter your nationality" id="example-text-input">
  </div>
</div>


</div>
<div>
<input type="submit" class="btn btn-primary" value="Submit information" name="submit">

&nbsp; &nbsp;
&nbsp; &nbsp;
<input type="reset" class="btn btn-secondary" value="Reset fields" name="reset">

&nbsp; &nbsp;
&nbsp; &nbsp;
<input type="reset" class="btn btn-secondary" value="Add information later" name="later">
</div>
      </form>

<?php include("../Template/footer.php")  ?>
</body>
</html>