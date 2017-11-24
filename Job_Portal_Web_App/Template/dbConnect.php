<?php
//Security: as the configuration.ini file is outside the htdocs
$configurationPath = "../../../../configurationDocs/configuration.ini";
if(file_exists($configurationPath)){
    $dbConnection = parse_ini_file($configurationPath);
    $user = $dbConnection['user'];
    $pass = $dbConnection['pass'];
    $name = $dbConnection['name'];
    $host = $dbConnection['host'];
    $type = $dbConnection['type'];
    
    $connection = mysqli_connect($host, $user, $pass, $name);
    try{
        if ($connection->connect_error) {
            echo '<script> alert("Technical error, Please contact the administrator, Server having issue connecting to database.");</script>';
         }
         else {
            echo "Connected.";
         }
    }catch(Exception $ex){
        echo '<script> alert("Technical error, Server having issue connecting to database.");</script>';
    }
}else{
    echo '<script> alert("Technical error, Please contact the administrator.");</script>';
}


//Use the information below when using OOP
/*include '../Resources/includes/databaseClass.php';
$users = new databaseClass();
if($users->connect()->connect_error){
    echo 'ERROR OCCURED';
}else{
    echo 'CONNECTION SUCCESSFUL';
}*/
?>