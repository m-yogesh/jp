<?php
    session_start();
    include("../Model/databaseClass.php");
        if(empty($_POST)){
            header('Location: login.php');
            exit;
        }else{
            //Data from Login form
            $category = $_POST['category'];
            $username = $_POST['userName'];
            $password = $_POST['password'];
            $errMsg = null;
            $connectionDB = new databaseClass;
    
            $records = $connectionDB->connectWithPDO()->prepare('SELECT * FROM  jp_user WHERE user_email = :username AND user_password = :password AND user_type = :type');
            $records->bindParam(':username', $username);
            $records->bindParam(':password', $password);
            $records->bindParam(':type', $category);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);

                if($results == null){
                    //Display error message
                    $_SESSION['loginErrorMsg'] = null;
                    $_SESSION['loginErrorMsg'] = "Your Credentials are incorrect, Please try again.";
                    header('Location: login.php');
                }else{
                    echo("User:  ");
                    echo("<hr/>");
                    echo("<br/>");
                    print_r($results);
                        if($results["user_type"] == "SEEKER"){

                            $seekerRecord = $connectionDB->connectWithPDO()->prepare('SELECT * FROM  jp_seeker WHERE seeker_user_id = :userId');
                            $seekerRecord->bindParam(':userId', $results['user_id']);
                            $seekerRecord->execute();
                            $seekerResult = $seekerRecord->fetch(PDO::FETCH_ASSOC);
                            $seekerInformation = array();
                            
                            array_push($seekerInformation, strcmp($records['user_id'], [string]));
                            array_push($seekerInformation,  strcmp($records['seeker_id'], [string]));
                            array_push($seekerInformation,  strcmp($records['seeker_profile_completed'], [string]));
                            array_push($seekerInformation,  strcmp($records['user_firstname'], [string]));
                            array_push($seekerInformation,  strcmp($records['user_lastname'], [string]));
                            array_push($seekerInformation,  strcmp($records['user_type'], [string]));


            echo("Seeker:  ");
            echo("<hr/>");
            echo("<br/>");
            print_r($seekerInformation);
            header('Location: ../Job_Seeker/Home.php');

                        }else if($results["user_type"] == "EMPLOYER"){
                            $employerRecord = $connectionDB->connectWithPDO()->prepare('SELECT * FROM  jp_company WHERE company_user_id = :userId');
                            $employerRecord->bindParam(':userId', $results['user_id']);
                            $employerRecord->execute();
                            $employerResult = $employerRecord->fetch(PDO::FETCH_ASSOC);
                            $comapnyInformation = array();
                            array_push($comapnyInformation, $records['user_id']);
                            array_push($comapnyInformation, $employerRecord['company_id']);
                            array_push($comapnyInformation, $employerRecord['seeker_profile_completed']);
                            array_push($comapnyInformation, $records['user_firstname']);
                            array_push($comapnyInformation, $records['user_lastname']);
                            array_push($comapnyInformation, $records['user_type']);
            echo("Company session:  ");
            echo("<hr/>");
            echo("<br/>");
            print_r($comapnyInformation);
            header('Location: ../Employer/Home.php');
                        }
                }
        }
?>