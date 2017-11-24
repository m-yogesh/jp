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
            echo "CONNECTION SUCCESSFUL";
        }else{
            echo '<script> alert("Technical error, Please contact the administrator.");</script>';
        }
        return $connection;
    }

}
?>