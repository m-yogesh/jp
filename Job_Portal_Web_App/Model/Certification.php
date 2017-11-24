<?php
class certification{
    public function __construct(){
        echo "<script>alert('Cretification Class triggered');</script>";
    }
        private $certificationId;
        private $courseIdentificationNumber;
        private $dateOfCompletion;
        private $institude;
        private $certitifcationList = new List_Certification();
        private $seeker = new Seeker();
    
        public function getCertificationId() {
            return $this->certificationId;
        }
    
        public function setCertificationId($certificationId) {
            $this->certificationId = $certificationId;
        }
    
        public function getCourseIdentificationNumber() {
            return $this->courseIdentificationNumber;
        }
    
        public function setCourseIdentificationNumber($courseIdentificationNumber) {
            $this->courseIdentificationNumber = $courseIdentificationNumber;
        }
    
        public function getDateOfCompletion() {
            return $this->dateOfCompletion;
        }
    
        public function setDateOfCompletion($dateOfCompletion) {
            $this->dateOfCompletion = $dateOfCompletion;
        }
    
        public function getInstitude() {
            return $this->institude;
        }
    
        public function setInstitude($institude) {
            $this->institude = $institude;
        }
    
        public function getCertitifcationList() {
            return $this->certitifcationList;
        }
    
        public function setCertitifcationList($certitifcationList) {
            $this->certitifcationList = $certitifcationList;
        }
    
        public function getSeeker() {
            return $this->seeker;
        }
    
        public function setSeeker($seeker) {
            $this->seeker = $seeker;
        }
    
        public String toString() {
            return "JP_Certification [certificationId=" . $certificationId . ", courseIdentificationNumber="
                    . $courseIdentificationNumber . ", dateOfCompletion=" . $dateOfCompletion . ", institude=" . $institude
                    . ", certitifcationList=" . $certitifcationList . ", seeker=" . $seeker . "]";
        }
}

?>