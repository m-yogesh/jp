<?php
class Secondary_Education{
    public function __construct(){
        echo "<script>alert('Secondary education Class triggered');</script>";
    }

        private $comapnyId;
        private $certificateId;
        private $grade;
        private $institude;
        private $dateOfCompletion;
        private $secondarySeeker;
    
        public function getComapnyId() {
            return $this->comapnyId;
        }
    
        public function setComapnyId($comapnyId) {
            $this->comapnyId = $comapnyId;
        }
    
        public function getCertificateId() {
            return $this->certificateId;
        }
    
        public function setCertificateId($certificateId) {
            $this->certificateId = $certificateId;
        }
    
        public function getGrade() {
            return $this->grade;
        }
    
        public function setGrade($grade) {
            $this->grade = $grade;
        }
    
        public function getInstitude() {
            return $this->institude;
        }
    
        public function setInstitude($institude) {
            $this->institude = $institude;
        }
    
        public function getDateOfCompletion() {
            return $this->dateOfCompletion;
        }
    
        public function setDateOfCompletion($dateOfCompletion) {
            $this->dateOfCompletion = $dateOfCompletion;
        }
    
        public function getSecondarySeeker() {
            return $this->secondarySeeker;
        }
    
        public function setSecondarySeeker($secondarySeeker) {
            $this->secondarySeeker = $secondarySeeker;
        }
    
        public String toString() {
            return "JP_Secondary_Education [comapnyId=" . $comapnyId . ", certificateId=" . $certificateId . ", grade="
                    . $grade . ", institude=" . $institude . ", dateOfCompletion=" . $dateOfCompletion . ", secondarySeeker="
                    . $secondarySeeker . "]";
        }
}

?>