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
    session_start();
    include("../Model/databaseClass.php");
//include("../Template/userSessionCheck.php");
//include("../Template/jobSeekerPermissionCheck.php");  
include("../Template/navBarSeeker.php");
?>

<section id="profileInfo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="control-label">Keyword(s): </label>
                            <div>
                                <input required type="text" class="form-control input-lg" name="keywordSearch" value="">
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
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["keywordSearch"])){
                        header('Location: searchJob.php');
                        exit();
                    }else{
                        $connectionDB = new databaseClass;
                        $keyword = $_POST['keywordSearch'];
                        $query = "select * from jp_job_posted where job_title LIKE :keyword OR job_description  LIKE :keyword ";
                        $retrieve = $connectionDB->connectWithPDO()->prepare($query);
                        $retrieve->bindValue(':keyword', '%'.$keyword.'%', PDO::PARAM_STR);
                        $retrieve->execute();
                        while ($data = $retrieve->fetch(PDO::FETCH_ASSOC)){
echo("Title:".$data['job_title']);
echo("<br/>");
echo("Description:". $data['job_description']);
echo("<span class='btn btn-success float-right'> <a href='http://localhost/jp/Job_Portal_Web_App/Job_Seeker/viewJob.php?jobcode='".$data['jp_job_posted'].">View Job</a> </span>");
echo("<hr/>");
                            
                              
                                   
                                   
                            } 
                        } 
                    }
                ?>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>