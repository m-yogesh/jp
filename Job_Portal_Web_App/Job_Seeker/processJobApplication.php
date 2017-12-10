<?php
session_start();
include("../Model/databaseClass.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["jobIdForapplication"])){
        $connectionDB = new databaseClass;
        $date = date('Y-m-d H:i:s');
                $statement = $connectionDB->connectWithPDO()->prepare("INSERT INTO jp_apply(job_apply_Date_submitted, job_apply_status,job_apply_seeker_id, job_apply_job_posted_id )
                VALUES( :dateSubmitted, :applyStatus, :seekerId, :postedJobId)");
            $statement->execute(array(
                "dateSubmitted" => $date,
                "applyStatus" => "pending",
                "seekerId" => "1",
                "postedJobId" => $_POST["jobIdForapplication"]
            ));
            //header('Location: searchJob.php');
    }
}


?>



    