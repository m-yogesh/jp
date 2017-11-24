<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Seeker - Home</title>
</head>
<body>
<?php
include("../Template/userSessionCheck.php");
include("../Template/jobSeekerPermissionCheck.php");  
include("../Template/navBar.php");
?>
<section id="profileInfo">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <div class="form-group">
                <img src="../Resources/images/job.png" height="100" width="100" class="img-responsive img-rounded" alt="Number of job(s) applied">
                    <br/>
                    <label class="control-label">Till now you've applied to {} job(s) </label>
                    <br/>
                </div>
            </div>
        <div class="col-sm-1"></div>                
            <div class="col-sm-3">
                <div class="form-group">
                <img src="../Resources/images/approved.png" height="100" width="100" class="img-responsive img-rounded" alt="Approved">
                    <br/>
                    <label class="control-label">Approved {} job(s) </label>
                    <br/>
                </div>
            </div>
        <div class="col-sm-1"></div>                
            <div class="col-sm-3">
                <div class="form-group">
                <img src="../Resources/images/pending.png" height="100" width="100" class="img-responsive img-rounded" alt="Pending...">
                    <br/>
                    <label class="control-label">Pending {} job(s) </label>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</body>
</html>