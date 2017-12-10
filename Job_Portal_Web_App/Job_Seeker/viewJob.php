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
//include("../Template/userSessionCheck.php");
include("jobSeekerPermissionCheck.php");  
include("../Template/navBarSeeker.php");

session_start();
include("../Model/databaseClass.php");
    if(empty($_POST)){
        header('Location: Home.php');
        exit();
    }else{
        --

                $company = $connectionDB->connectWithPDO()->prepare('SELECT * FROM  jp_company WHERE  company_id = :companyId');
                $company->bindParam(':companyId', $results['job_company_id']);
                $company->execute();
                $companyResults = $company->fetch(PDO::FETCH_ASSOC);

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
                <h4><b>Job title:</b>  <?php echo($results['job_title']); ?> </h4>
                <br/>
                <h4><b>Company name:</b> <?php echo($companyResults['company_name']); ?> </h4>
                <br/>
                <h4><b>Location:</b> <?php echo($companyResults['company_location']); ?> </h4>
                <br/>
                <h4><b>Phone number: </b><?php echo($companyResults['company_phone_number']); ?> </h4>
                <br/>
                <h4><b>Email: </b><?php echo($companyResults['company_email']); ?> </h4>
                <br/>
                <h4><b>Contact Person:</b> <?php echo($companyResults['company_contact_person']); ?> </h4>
                <br/>

                <form method="POST" action="processJobApplication.php">
                <input type="hidden" name="jobIdForapplication" value="<?php echo($results['job_company_id']); ?>">
                            <input type="submit" class="btn btn-primary float-right" name="applyJob" value="Apply Job"/>
                </form>
            </div>
        </div>
        <h1>Job Details</h1>
        <div class="row">
            <div class="col-sm-8">
                <h4><b>Title:</b> <?php echo($results['job_title']); ?> </h4>
                <br/>
                <h4><b>Description: </b><?php echo($results['job_description']); ?> </h4>
                <br/>
                <h4><b>Required qualification:</b> <?php echo($results['job_required_qualification']); ?> </h4>
                <br/>
                <h4><b>addition information:</b> <?php echo($results['job_other_info']); ?> </h4>
                <br/>
            </div>

            <div class="col-sm-4">
                <h4><b>Employment type:</b> <?php echo($results['EmploymentType']); ?> </h4>
                <br/>
                <h4><b>Closing date:</b> <?php echo($results['job_end_date']); ?> </h4>
                <br/>
                <h4><b>Skills:</b> <?php echo($results['job_skills']); ?> </h4>
                <br/>
                <h4><b>Salary:</b> <?php echo($results['job_salary']); ?> </h4>
            </div>
        </div>

    </div>
</section>
<?php
    }

?>
</body>
</html>