<?php
class Company{
    public function __construct(){
        echo "<script>alert('Company Class triggered');</script>";
    }
        private $comapnyId;
        private $companyName;
        private $companyLogo;
        private $location;
        private $phoneNumber;
        private $email;
        private $contactPerson;
        private $user = new User();
    
        public function getComapnyId() {
            return $this->comapnyId;
        }
    
        public function setComapnyId($comapnyId) {
            $this->comapnyId = $comapnyId;
        }
    
        public function getCompanyName() {
            return $this->companyName;
        }
    
        public function setCompanyName($companyName) {
            $this->companyName = $companyName;
        }
    
        public function getCompanyLogo() {
            return $this->companyLogo;
        }
    
        public function setCompanyLogo($companyLogo) {
            $this->companyLogo = $companyLogo;
        }
    
        public function getLocation() {
            return $this->location;
        }
    
        public function setLocation($location) {
            $this->location = $location;
        }
    
        public function getPhoneNumber() {
            return $this->phoneNumber;
        }
    
        public function setPhoneNumber($phoneNumber) {
            $this->phoneNumber = $phoneNumber;
        }
    
        public function getEmail() {
            return $this->email;
        }
    
        public function setEmail($email) {
            $this->email = $email;
        }
    
        public function getContactPerson() {
            return $this->contactPerson;
        }
    
        public function setContactPerson($contactPerson) {
            $this->contactPerson = $contactPerson;
        }
    
        public function getUser() {
            return $this->user;
        }
    
        public function setUser($user) {
            $this->user = $user;
        }
    
        public String toString() {
            return "JP_Company [comapnyId=" . $comapnyId . ", companyName=" . $companyName . ", companyLogo=" . $companyLogo
                    . ", location=" . $location . ", phoneNumber=" . $phoneNumber . ", email=" . $email . ", contactPerson="
                    . $contactPerson . ", user=" . $user . "]";
        }
}

?>