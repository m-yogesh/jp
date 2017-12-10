<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
.form-group input[type="checkbox"] {
    display: none;
}

.form-group input[type="checkbox"] + .btn-group > label span {
    width: 20px;
}

.form-group input[type="checkbox"] + .btn-group > label span:first-child {
    display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span:last-child {
    display: inline-block;   
}

.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
    display: inline-block;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
    display: none;   
}
</style>
<?php
    include("../Template/userSessionCheck.php");
    include("../Template/jobSeekerPermissionCheck.php");  
    include("../Template/navBar.php");
?>
<form  method="Post" Action="../Template/userSessionCheck.php">
<div class= "form-group">
<br/><br/><br/>
    <h1> Post a Job </h1>
    <label for="Title"> Title  </label>
    <input class="form-control input-lg" type="text" name = "Title" id= "Title" placeholder="Title" required />
    <br/>
    <label for="Description"> Brief Description of the job  </label>
    <textarea class="form-control input-lg" name = "Description" id= "Description" placeholder="Description" required></textarea>
    <br/>
    <label for="Salary"> Salary  </label>
    <input class="form-control input-lg" type="text" name = "Salary" id= "Salary" placeholder="Salary" required />
    <br/>
    <label for="Qualification"> Qualification  </label>
    <input class="form-control input-lg" type="text" name = "Qualification" id= "Qualification" placeholder="Qualification" required />
    <br/>
    <label for="Enddate"> Application closing date  </label>
    <input class="form-control input-lg" type="date" name = "Enddate" id= "Enddate" placeholder="Enddate" required />
    <br/>
    <label for="other_info"> Additional Details  </label>
    <textarea class="form-control input-lg" type="text" name = "other_info" id= "other_info" placeholder="Additional Details" required ></textarea>
    <br/>
    <?php 
   /* //Create the query
    $sql = "SELECT `name` FROM Employees";

    //Run the query
    $query_resource = mysql_query($sql);

    //Iterate over the results that you've gotten from the database (hopefully MySQL)
    while( $employee = mysql_fetch_assoc($query_resource) ):*/
    ?>

    <!--<span><?php //echo $employee['name']; ?></span>-->
    <!--<input type="checkbox" name="employees[]" value="<?php //echo $employee['name']; ?> /><br />-->

    <?php //endwhile; ?>
    <h6>Skill Available in market</h6>

    <input type="checkbox" name="PHP" id="PHP" autocomplete="off" />
    <div class="btn-group">
        <label for="PHP" class="btn btn-primary">
        <span class="glyphicon glyphicon-ok"></span>
        <span class="glyphicon glyphicon-remove"></span>
        </label>
        <label for="PHP" class="btn btn-default active">
            PHP
        </label>
    </div>
    <input type="checkbox" name="SQL" id="SQL" autocomplete="off" />
    <div class="[ btn-group ]">
        <label for="SQL" class="[ btn btn-primary ]">
        <span> YES  </span>
        <span> NO  </span>
        </label>
        <label for="SQL" class="[ btn btn-default active ]">
            SQL
        </label>
    </div>
    <br/>
   <button type="submit" class="btn btn-success col-lg-12"> Submit</button>
<div>
</form>
</body>
</html>