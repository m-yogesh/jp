<?php
include 'databaseClass.php';
include 'Job_Posted.php';
class Job_PostedDTO extends databaseClass{

    public function __construct(){
        echo "<script>alert('Job Posted DTO Class triggered');</script>";
    }

    public function getAllJobPostedByCompany(){
        
        }
}
?>