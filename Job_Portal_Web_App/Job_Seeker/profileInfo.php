<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
<?php
//include("../Template/userSessionCheck.php");
include("jobSeekerPermissionCheck.php");  
include("../Template/navBarSeeker.php");
session_start();
include("../Model/databaseClass.php");

$connectionDB = new databaseClass;

  //Hardcoded
  $seekerId = 1;

        $records = $connectionDB->connectWithPDO()->prepare('SELECT * FROM  jp_seeker WHERE seeker_id = :seekerId');
        $records->bindParam(':seekerId', $seekerId);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
?>

<section id="profileInfo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6" style="background-color:lavenderblush;">
                <h1 class="text-center"><?php echo($_SESSION['seeker_user_session'][3]." ".$_SESSION['seeker_user_session'][4])?></h1>
                <br/>
            </div>
        <div class="col-sm-3"></div>
    </div>

  <div class="row">
    <div class="col-sm-3"></div>
        <div class="col-sm-6" style="background-color:lavenderblush;">
            <h3>Status: <?php echo($results['seeker_status']);?> </h3>
                <br/>
            <h3>Date of Birth: <?php echo($results['seeker_date_of_birth']); ?></h3>
                <br/>
            <h3>Gender: <?php echo($results['seeker_gender']);  ?></h3>
                <br/>
            <h3>Career Objective: <?php echo($results['seeker_career_objective']);  ?></h3>
                <br/>
            <h3>Nationality: <?php echo($results['seeker_nationality']);  ?></h3>
                <br/>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#EditProfileInfoForm">
                Edit info
            </button>
        <!-- Modal HTML Markup -->
            <div id="EditProfileInfoForm" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title">Edit your profile information</h1>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="POST" action="processAddInfo.php">
                                <div class="form-group">
                                    <label class="control-label">Status:</label>
                                <div>
                                <select class="form-control" id="status">
                                    <option value="employed"
                                        <?php 
                                            if($results['seeker_status'] == 'Employed'){ 
                                                echo("selected");  
                                            }  
                                        ?>>
                                        Employed
                                    </option>

                                    <option value="unemployed"  
                                        <?php 
                                            if($results['seeker_status'] == 'Unemployed'){ 
                                                    echo("selected");  
                                            }  
                                        ?>>
                                        Unemployed
                                    </option>
                                </select>
                            </div>
                        </div>
                    <div class="form-group">
                        <label class="control-label">Date of Birth: </label>
                    <div>
                        <input required type="text" class="form-control input-lg" name="dateOfBirth" disabled value=" 
                            <?php 
                                echo($results['seeker_date_of_birth']); 
                            ?>">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Gender:</label>
                    <div>
                    <select class="form-control" id="gender">
                    <option value="Male" <?php if($results['seeker_gender'] == 'Male'){ echo("selected");  }  ?>  >Male</option>
                    <option value="Female" <?php if($results['seeker_gender'] == 'Female'){ echo("selected");  }  ?>  >Female</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Career objective: </label>
                    <div>
                    <textarea maxlength="255" rows="4" cols="50" placeholder="Enter the objective of your career" id="myTextarea">
                    <?php $results['seeker_career_objective'] ?>
                    </textarea>
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
                    </div>
                    <div class="form-group">
                    <label class="control-label">Nationality: </label>
                    <div>
                        <input required type="text" class="form-control input-lg" name="nationality" value="<?php $results['seeker_nationality'] ?>">
                    </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" name="editInfomation" class="btn btn-success">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    </div>
    <div class="col-sm-3"></div>
  </div>
<!--Additional information-->
<h2 class="text-center">Strengthen your profile</h2>
<br/>
<!--Experience-->
    <div class="row>">
        <div class="col-sm-8">
        <h3>List of experience of user</h3>
        <h4>Button to be able to delete or edit info</h4>

        </div>

        <div class="col-sm-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#experienceForm">
            Add experience
        </button>
        <!-- Modal HTML Markup -->
<div id="experienceForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Add Experience</h1>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="">
                    <div class="form-group">
                        <label class="control-label">Start date: </label>
                        <div>
                            <input required type="Date" class="form-control input-lg" name="startDate" value="">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label">End date: </label>
                    <div>
                        <input required type="Date" class="form-control input-lg" name="endDate" value="">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Company: </label>
                    <div>
                        <input required type="Text" class="form-control input-lg" name="company" value="">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Position: </label>
                    <div>
                        <input required type="Text" class="form-control input-lg" name="position" value="">
                    </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" name="addExperience" class="btn btn-success">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

        </div>
    </div>
    <br/>
 <!--Certification-->
 <div class="row>">
 <div class="col-sm-8">
 <h3>List of Certification of user</h3>
 <h4>Button to be able to delete or edit info</h4>
 </div>

 <div class="col-sm-4">
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#certificationForm">
    Add Certification
</button>


<!-- Modal HTML Markup -->
<div id="certificationForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Add Certification</h1>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="">
                    <div class="form-group">
                        <label class="control-label">Course Identification Number: </label>
                        <div>
                            <input required type="text" class="form-control input-lg" name="courseId" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date of completion: </label>
                        <div>
                            <input required type="Date" class="form-control input-lg" name="dateOfCompletion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Institude: </label>
                        <div>
                            <input required type="text" class="form-control input-lg" name="institude">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Certification list: </label>
                        <div>
                        <select class="form-control" id="certificationList">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" name="certificationSubmit" class="btn btn-success">Add</button>
                        </div>
                    </div>
                </form>
                <h1>Or Create certification</h1>
                <form role="form" method="POST" action="">
                    <div class="form-group">
                        <label class="control-label">Course name: </label>
                        <div>
                            <input required type="text" class="form-control input-lg" name="courseName" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" name="newCertificationSubmit" class="btn btn-success">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        </div>
    </div>
    <br/>
<!--Tertiary Education-->
<div class="row>">
<div class="col-sm-8">
<h3>List of Tertiary Education of user</h3>
<h4>Button to be able to delete or edit info</h4>
</div>

<div class="col-sm-4">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tertiaryEdu">
            Add Tertiary Education
        </button>
        <!-- Modal HTML Markup -->
<div id="tertiaryEdu" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Add Tertiary Education</h1>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="">
                    <div class="form-group">
                        <label class="control-label">Grade: </label>
                        <div>
                            <input required type="Text" class="form-control input-lg" name="grade" value="">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Institude: </label>
                    <div>
                        <input required type="Text" class="form-control input-lg" name="institudeName" value="">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Year of completion: </label>
                    <div>
                        <input required type="Date" class="form-control input-lg" name="yearOfCompletionTE" value="">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Course name: </label>
                    <div>
                        <input required type="Text" class="form-control input-lg" name="courseNameTE" value="">
                    </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" name="tertiaryEduSubmit" class="btn btn-success">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        </div>
    </div>

    <br/>
    <!--Secondary Education-->
    <div class="row>">
    <div class="col-sm-8">
    <h3>List of Secondary Education of user</h3>
    <h4>Button to be able to delete or edit info</h4>
    </div>

    <div class="col-sm-4">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#secondaryEdu">
            Add Secondary Education
        </button>
        <!-- Modal HTML Markup -->
<div id="secondaryEdu" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Add Secondary Education</h1>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="">
                    <div class="form-group">
                        <label class="control-label">Certificate Identification Number: </label>
                        <div>
                            <input required type="Text" class="form-control input-lg" name="secondaryCertificateId" value="">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Grade: </label>
                    <div>
                        <input required type="Text" class="form-control input-lg" name="secondaryGrade" value="">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Institude: </label>
                    <div>
                        <input required type="Date" class="form-control input-lg" name="secondaryInstitude" value="">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Year of completion: </label>
                    <div>
                        <input required type="Text" class="form-control input-lg" name="secondaryYearOfCompletion" value="">
                    </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" name="secondaryEduSubmit" class="btn btn-success">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        </div>
    </div>
    <br/>
    <!--Skills-->
    <div class="row>">
    <div class="col-sm-8">
    <h3>List of Skills of user</h3>
    <h4>Button to be able to delete or edit info</h4>
    </div>

    <div class="col-sm-4">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#skillsForm">
            Add your skills
        </button>
        <!-- Modal HTML Markup -->
<div id="skillsForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Add Skills</h1>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="">
                    <div class="form-group">
                        <label class="control-label">Skills: </label>
                        <div>
                            <input required type="Text" class="form-control input-lg" name="skillName" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" name="skillsBtnSubmit" class="btn btn-success">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        </div>
    </div>

</section>   
</body>
</html>