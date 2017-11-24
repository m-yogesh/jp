<?php
include 'databaseClass.php';
include 'Company.php';
class CompanyDTO extends databaseClass{

    public function __construct(){
        echo "<script>alert('Company DTO Class triggered');</script>";
    }

    public function getCompanyDetails(){
     
        }
}
?>