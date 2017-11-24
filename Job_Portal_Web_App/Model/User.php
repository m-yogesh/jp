<?php
class User{
    public function __construct(){
        echo "<script>alert('User Class triggered');</script>";
    }
        private $user_Id;
        private $firstName;
        private $lastName;
        private $address;
        private $password;
        private $email;
        private $phone_Number;
        private $twoFactorEnable;
        private $accessCountFail;
        private $lastTimeAccess;
        private $createdOn;
        private $isActive;
        private $type;
        private $profileView;

        public function getProfileView(){
            return $this->profileView;
        }

        public function setProfileView($profileView){
            $this->profileView = $profileView;
        }

        public function getUser_Id() {
            return $this->user_Id;
        }
    
        public function setUser_Id($user_Id_) {
            $this->user_Id = $user_Id_;
        }
    
        public function getFirstName() {
            return $this->firstName;
        }
    
        public function setFirstName($firstName) {
            $this->firstName = $firstName;
        }
    
        public function getLastName() {
            return $this->lastName;
        }
    
        public function setLastName($lastName) {
            $this->lastName = $lastName;
        }
    
        public function getAddress() {
            return $this->address;
        }
    
        public function setAddress($address) {
            $this->address = $address;
        }
    
        public function getPassword() {
            return $this->password;
        }
    
        public function setPassword($password) {
            $this->password = $password;
        }
    
        public function getEmail() {
            return $this->email;
        }
    
        public function setEmail($email) {
            $this->email = $email;
        }
    
        public function getPhone_Number() {
            return $this->phone_Number;
        }
    
        public function setPhone_Number($phone_Number) {
            $this->phone_Number = $phone_Number;
        }
    
        public function isTwoFactorEnable() {
            return $this->twoFactorEnable;
        }
    
        public function setTwoFactorEnable($twoFactorEnable) {
            $this->twoFactorEnable = $twoFactorEnable;
        }
    
        public function getAccessCountFail() {
            return $this->accessCountFail;
        }
    
        public function setAccessCountFail($accessCountFail) {
            $this->accessCountFail = $accessCountFail;
        }
    
        public function getLastTimeAccess() {
            return $this->lastTimeAccess;
        }
    
        public function setLastTimeAccess($lastTimeAccess) {
            $this->lastTimeAccess = $lastTimeAccess;
        }
    
        public function getCreatedOn() {
            return $this->createdOn;
        }
    
        public function setCreatedOn($createdOn) {
            $this->createdOn = $createdOn;
        }
    
        public function isActive() {
            return $this->isActive;
        }
    
        public function setActive($isActive) {
            $this->isActive = $isActive;
        }
    
        public function getType() {
            return $this->type;
        }
    
        public function setType($type) {
            $this->type = $type;
        }
    
        public function toString() {
            return "JP_User [user_Id=" . $this->$user_Id . ", firstName=" . $this->$firstName . ", lastName=" . $this->$lastName . ", address="
                    . $this->$address . ", password=" . $this->$password . ", email=" . $this->$email . ", phone_Number=" . $this->$phone_Number
                    . ", twoFactorEnable=" . $this->$twoFactorEnable . ", accessCountFail=" . $this->$accessCountFail . ", lastTimeAccess="
                    . $this->$lastTimeAccess . ", createdOn=" . $this->$createdOn . ", isActive=" . $this->$isActive . ", type=" .$this-> $type . "]";
        }
}
?>