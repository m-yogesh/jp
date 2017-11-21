<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Job</title>
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
            <div class="col-sm-4">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="control-label">Keyword(s): </label>
                            <div>
                                <input required type="text" class="form-control input-lg" name="keywordSearch" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Job title: </label>
                            <div>
                                <input required type="text" class="form-control input-lg" name="jobTitleSearch" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Company: </label>
                            <div>
                                <input required type="text" class="form-control input-lg" name="companySearch" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">location: </label>
                            <div>
                                <input required type="text" class="form-control input-lg" name="LocationSearch" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Skills: </label>
                            <div>
                                <input required type="text" class="form-control input-lg" name="skillSearch" value="">
                            </div>
                        </div>
                        <div class="form-group">
                        <div>
                            <button type="submit" name="searchByCriteria" class="btn btn-success">Search</button>
                            <input type="reset" name="resetValue" class="btn btn-success" value="Reset"/>
                        </div>
                    </div>
                    </div>
                </form>
            </div>

           
            <div class="col-sm-8">
                <table class="table table-striped">
            <?php 
                        for ($x = 0; $x <= 100; $x++) {
                    ?>
                   <tr>
                        <label class="control-label"> <?php echo"Title: ".$x ?></label>
                        <button type="submit" name="ApplyJob" class="btn btn-success float-right">Apply</button>
                        <br/>
                   </tr>
                        
                    <tr>
                        <label class="control-label"> <?php echo"Company: ".$x ?></label>
                        <br/>
                    </tr>

                    <tr>
                        <label class="control-label"> <?php echo"Number of applicant(s): ".$x ?></label>
                        <button type="submit" name="ViewJob" class="btn btn-primary float-right">View Job</button>
                        <hr/>
                    </tr>
                                  
            <?php 
                } 
            ?>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>