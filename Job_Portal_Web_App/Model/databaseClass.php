<?php
class databaseClass{
    private $serverName;
    private $userName;
    private $passWord;
    private $databaseName;

    public function __construct(){
        echo "<script>alert('database Class triggered');</script>";
    }

    public function connect(){

        //Security: as the configuration.ini file is outside the htdocs
        $configurationPath = "../../../../configurationDocs/configuration.ini";
        if(file_exists($configurationPath)){
            $dbConnection = parse_ini_file($configurationPath, true);
            $this->userName = $dbConnection['user'];
            $this->passWord = $dbConnection['pass'];
            $this->databaseName = $dbConnection['name'];
            $this->serverName = $dbConnection['host'];
            $connection = new mysqli($this->serverName, $this->userName, $this->passWord, $this->databaseName);
            if($connection->connect_errno){
                printf("Connect failed: %s\n", $connection->connect_error);
                exit();
            }else{
                echo("Connection successful. <br/>");   
            }
        }else{
            echo '<script> alert("Technical error, Please contact the administrator.");</script>';
        }
        return $connection;
    }


    public function connectWithPDO(){
         //Security: as the configuration.ini file is outside the htdocs
         $configurationPath = "../../../../configurationDocs/configuration.ini";
         if(file_exists($configurationPath)){
             $dbConnection = parse_ini_file($configurationPath, true);
             $this->userName = $dbConnection['user'];
             $this->passWord = $dbConnection['pass'];
             $this->databaseName = $dbConnection['name'];
             $this->serverName = $dbConnection['host'];
             $databaseConnection;
            try{
                $databaseConnection = new PDO('mysql:host='.$this->serverName.';dbname='.$this->databaseName, $this->userName, $this->passWord);
                $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
            return $databaseConnection;
         }
    }


    
    public function connectNormal($query){
        //Security: as the configuration.ini file is outside the htdocs
        $configurationPath = "../../../../configurationDocs/configuration.ini";
        if(file_exists($configurationPath)){
            $dbConnection = parse_ini_file($configurationPath, true);
            $this->userName = $dbConnection['user'];
            $this->passWord = $dbConnection['pass'];
            $this->databaseName = $dbConnection['name'];
            $this->serverName = $dbConnection['host'];
            $conn = mysqli_connect($this->serverName,$this->userName,$this->passWord,$this->databaseName);
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            $retval = mysql_query( $query, $conn );


           return $retval;
        }
   }
   
}
?>