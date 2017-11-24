<?php
include 'databaseClass.php';
include 'User.php';
class UserDTO extends databaseClass{

    public function __construct(){
        echo "<script>alert('User DTO Class triggered');</script>";
    }

    public function getAllUsers(){
        $sql = "SELECT * FROM jp_user";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        $userArray = array();
        $userInstance = new User();
        $counter = 0;
        if($numRows > 0){
            while($row = $result->fetch_assoc()){

                $userInstance->setUser_Id($row['user_id']);
                $userInstance->setFirstName($row['user_firstname']);
                $userInstance->setLastName($row['user_lastname']);
                $userInstance->setAddress($row['user_address']);
                $userInstance->setPassword($row['user_password']);
                $userInstance->setEmail($row['user_email']);
                $userInstance->setPhone_Number($row['user_phone_number']);
                $userInstance->setTwoFactorEnable($row['user_two_factor_enable']);
                $userInstance->setAccessCountFail($row['user_access_fail_count']);
                $userInstance->setLastTimeAccess($row['user_last_time_access']);
                $userInstance->setCreatedOn($row['user_created_on']);
                $userInstance->setActive($row['user_isActive']);
                $userInstance->setType($row['user_type']);
                $userInstance->setProfileView( $row['profileViews']);
                $jsonEncode = json_encode((array)$userInstance);
                array_push($userArray, $jsonEncode);
            }
                return $userArray;
            }else{
                echo("No result found!");
            }
        }

        public function checkCredentials($username, $password){
            
        }

}
?>