<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Job details</title>
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
            <div class="col-sm-4">
                Company Logo
                <br/>
                <img src="cinqueterre.jpg" class="img-responsive img-rounded" alt="Cinque Terre">
            </div>

             <div class="col-sm-8">
                <h4>Job title: </h4>
                <br/>
                <h4>Company name: </h4>
                <br/>
                <h4>Location: </h4>
                <br/>
                <h4>Phone number: </h4>
                <br/>
                <h4>Email: </h4>
                <br/>
                <h4>Contact Person: </h4>
                <br/>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal">
                Apply Job
                </button>
            </div>
        </div>
        <h1>Job Details</h1>
        <div class="row">
            <div class="col-sm-8">
                <h4>Title: </h4>
                <br/>
                <h4>Description: </h4>
                <br/>
                <h4>Required qualification: </h4>
                <br/>
                <h4>addition information: </h4>
                <br/>
            </div>

            <div class="col-sm-4">
                <h4>Employment type: </h4>
                <br/>
                <h4>Closing date: </h4>
                <br/>
                <h4>Skills: </h4>
                <br/>
                <h4>Salary: </h4>
            </div>
        </div>

    </div>
</section>

</body>
</html>