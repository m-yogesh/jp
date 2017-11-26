<?php
    session_start();
    include("../Model/databaseClass.php");
    if(empty($_POST)){
        header('Location: addInfoJS.php');
        exit;
    }else{
        if($_POST['later']){
            header('Location: Home.php');
        }else if ($_POST['submitAditional']){

           $cv = $_POST['fileToUpload'];
           $profilePicture = $_POST['profilePictureFile'];
           $month = $_POST['month'];
           $day = $_POST['day'];
           $year = $_POST['year'];
           $career = $_POST['careerObjectiveText'];
           $nationality = $_POST['nationalityText'];
            echo($cv."+++++".$profilePicture."+++++".$month."+++++".$day."+++++".$year."+++++".$career."+++++");

        }else{
            header('Location: addInfoJS.php');
            exit;
        }

    }


?>