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
/*
include('../../GoogleAuth/class/userClass.php');
$userClass = new userClass();
include('../../GoogleAuth/session.php');
$userEmailConfirmation= $userClass->userEmailConfirmation($session_uid);
$jsonEncode = json_encode((array)$userEmailConfirmation);
$data = json_decode($jsonEncode);

if(empty($data->email_confirmation)){
    $userClass->userEmailConfirmationFirstLog($session_uid);
}

if(($data->email_confirmation)==0){

    header("Location: 'GoogleAuth/email_confirmations.php'");
}
*/

//include("../Template/userSessionCheck.php");
include("jobSeekerPermissionCheck.php");  
include("../Template/navBarSeeker.php");
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