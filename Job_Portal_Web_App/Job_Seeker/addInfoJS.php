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
session_start();
include("../Model/databaseClass.php");

$connectionDB = new databaseClass;

  //Hardcoded
  $seekerId = 1;

        $records = $connectionDB->connectWithPDO()->prepare('SELECT * FROM  jp_seeker WHERE seeker_id = :seekerId');
        $records->bindParam(':seekerId', $seekerId);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        print_r($results);




//include("../Template/userSessionCheck.php");
//include("../Template/jobSeekerPermissionCheck.php");  
include("../Template/navBarSeeker.php");
?>
<section id="addInfoJs">
<div class="container">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <h2>Add your basic information so that Employer can see.</h2>

      <form action="processAddInfo.php" method="post" enctype="multipart/form-data">
          <div>
              <!--Upload CV-->
              <div class="alert alert-info">
                    <strong>Info!</strong> Please note that CV/Resume can be upload in <b><u>.pdf</u></b> OR <b><u>.doc</u></b> OR <b><u>.docx</u></b> format.
                </div>
                Upload CV/Resume: &nbsp;&nbsp;
                    <label class="custom-file">
                    <input onchanage="readFileName(this)" required type="file" name="fileToUpload" id="fileToUpload" accept=".pdf,.doc,.docx" class="custom-file-input">
                    <span class="custom-file-control"></span>
                    <br> 
                    </label>
                    <div class="alert alert-info">
                        <p id="uploadedFileName"></p>
                    </div>
                    <script>
                       var fileToRead = document.getElementById("fileToUpload");
                       fileToRead.addEventListener("change", function(event) {
                           var files = fileToRead.files;
                           var len = files.length;
                           // we should read just one file
                           if (len) {
                               document.getElementById("uploadedFileName").innerHTML = 'Selected file: ' + files[0].name;
                           }
                       
                       }, false);
                    </script>
                    <hr>
                    <br> 

                    <!-- Set profile picture -->
                   Upload your profile picture: &nbsp; &nbsp;
                   <input type='file' name="profilePictureFile" id="profilePictureFile" required accept="image/*" onchange="readURL(this);" />
                   <br> <br>
                   Get a preview of your uploaded image:
                    <img id="profilePictureImg" src="../Resources/images/180" alt="your image" />
                 <hr>
    
                    <br>
                     <!-- Set a date of birth -->
                    <div class="form-group">
                        <label for="example-date-input" class="col-2 col-form-label">Date of birth:</label>
                            <div class="col-10">
                                <select required name="month" id="month">
                                <option value="" selected disabled>Month</option>
                                </select>
                                <select required name="day" id="day">
                                <option value="" selected disabled>Day</option>
                                </select>
                                <select required name="year" id="year">
                                <option value="" selected disabled>Year</option>
                                </select>
                            </div>
                            <script type ="text/javascript" src="http://code.jQuery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
  var year = new Date().getFullYear()  - 18;
  // load years
  for (var i=1957; i<=year; i++) $("#year").append('<option value=' + i + '>' + i + '</option>');
  // load months
  for (var i=1; i<=12; i++) $("#month").append('<option value=' + i + '>' + i + '</option>');
  // load days
  for (var i=1; i<=31; i++) $("#day").append('<option value=' + i + '>' + i + '</option>');
});

$(function() {
  $('#year').change(function() {
    var now = new Date();
    if ($('#year').val()==now.getFullYear()) {
      $('#month option').each(function() {      
        if ($(this).val()>(now.getMonth()+1)) $(this).remove();
      });
    } else {
      for (var i=1; i<13; i++)
        if ($("#month option[value='" + i + "']").val()==undefined)
          $("#month").append('<option value=' + i + '>' + i + '</option>');
    }

    checkMonth();
  });

  $('#month').change(checkMonth);
});

function checkMonth() {
  var now = new Date();
  if ($('#year').val()==now.getFullYear() && $('#month').val()==(now.getMonth()+1)) {
    $('#day option').each(function() {
      if ($(this).val()>now.getDate()) $(this).remove();
    });
  } else {
    var days = 31;
    var month = $('#month').val();
    if (month==2) {
      if (($('#year').val() % 4) == 0) days = 29; // leap year
      else days = 28;
    } else if (month==2 || month==4 || month==6 || month==9 || month==11) {
      days = 30;
    }
    for (var i=1; i<32; i++)
      if (i>days)
        $("#day option[value='" + i + "']").remove();
      else if ($("#day option[value='" + i + "']").val()==undefined)
        $("#day").append('<option value=' + i + '>' + i + '</option>');
  }
}
</script>

                    <br/>
            <!-- set Career objectives -->
            <div class="form-group">
                    <label for="sel1">Career Objectives:</label>
                    <textarea maxlength="255" rows="4" cols="50" Required placeholder="Enter the objective of your career" name="careerObjectiveText" id="careerObjectiveText" ><?php echo $results['seeker_career_objective']  ?></textarea>
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
    <input class="form-control" name="nationalityText" type="text" value="<?php echo $results['seeker_nationality']  ?>" Required placeholder="Enter your nationality" id="nationalityText">
  </div>
</div>


</div>
<div>
<input type="submit" class="btn btn-primary" value="Submit information" name="submitAditional">

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