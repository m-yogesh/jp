<?php
class Apply{
    private $seeker_Id;
    
        private $cvDocument;
    
        private $profilePicture;
    
        private $status;
    
        private $dateOfBirth;
    
        private $gender;
    
        private $careerObjective;
    
        private $nationality;
    
        private $user = new User();
    
        private $isProfileCompleted;
    
        public function getSeeker_Id() {
            return $this->$seeker_Id;
        }
    
        public function setSeeker_Id($seeker_Id) {
            $this.$seeker_Id = $seeker_Id;
        }
    
        public function getCvDocument() {
            return $this->$cvDocument;
        }
    
        public function setCvDocument($cvDocument) {
            $this->$cvDocument = $cvDocument;
        }
    
        public function getProfilePicture() {
            return $this->$profilePicture;
        }
    
        public function setProfilePicture($profilePicture) {
            $this->$profilePicture = $profilePicture;
        }
    
        public function getStatus() {
            return $this->$status;
        }
    
        public function setStatus($status) {
            $this-$status = $status;
        }
    
        public function getDateOfBirth() {
            return $this->$dateOfBirth;
        }
    
        public function setDateOfBirth($dateOfBirth) {
            $this->$dateOfBirth = $dateOfBirth;
        }
    
        public function getGender() {
            return $this->$gender;
        }
    
        public function setGender($gender) {
            $this->$gender = $gender;
        }
    
        public function getCareerObjective() {
            return $this->$careerObjective;
        }
    
        public function setCareerObjective($careerObjective) {
            $this->$careerObjective = $careerObjective;
        }
    
        public function getNationality() {
            return $this->$nationality;
        }
    
        public function setNationality($nationality) {
            $this->$nationality = $nationality;
        }
    
        public function getUser() {
            return $this->$user;
        }
    
        public function setUser(User $user) {
            $this->$user = $user;
        }
    
        public function isProfileCompleted() {
            return $this->$isProfileCompleted;
        }
    
        public function setProfileCompleted($isProfileCompleted) {
            $this->$isProfileCompleted = $isProfileCompleted;
        }
    
       
        @Override
        public String toString() {
            return "JP_Seeker [seeker_Id=" . $seeker_Id . ", cvDocument=" . $cvDocument . ", profilePicture=" . $profilePicture
                    . ", status=" . $status . ", dateOfBirth=" . $dateOfBirth . ", gender=" . $gender . ", careerObjective="
                    . $careerObjective . ", nationality=" . $nationality . ", user=" . $user . ", isProfileCompleted="
                    . $isProfileCompleted . "]";
        }
}
?>