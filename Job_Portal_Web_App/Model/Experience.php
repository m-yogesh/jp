<?php
class Experience{
    public function __construct(){
        echo "<script>alert('Experience Class triggered');</script>";
    }
        private $experienceId;
        private $experienceStartDate;
        private $experienceEndDate;
        private $experienceCompany;
        private $experiencePosition;
        private $experienceSeeker = new Seeker();
    
        public function getExperienceId() {
            return $this->experienceId;
        }
    
        public function setExperienceId($experienceId) {
            $this->experienceId = $experienceId;
        }
    
        public function getExperienceStartDate() {
            return experienceStartDate;
        }
    
        public function setExperienceStartDate($experienceStartDate) {
            $this->experienceStartDate = $experienceStartDate;
        }
    
        public function getExperienceEndDate() {
            return $this->experienceEndDate;
        }
    
        public function setExperienceEndDate($experienceEndDate) {
            $this->experienceEndDate = $experienceEndDate;
        }
    
        public function getExperienceCompany() {
            return $this->experienceCompany;
        }
    
        public function setExperienceCompany($experienceCompany) {
            $this->experienceCompany = $experienceCompany;
        }
    
        public function getExperiencePosition() {
            return $this->experiencePosition;
        }
    
        public function setExperiencePosition($experiencePosition) {
            $this->experiencePosition = $experiencePosition;
        }
    
        public function getExperienceSeeker() {
            return $this->experienceSeeker;
        }
    
        public function setExperienceSeeker($experienceSeeker) {
            $this->experienceSeeker = $experienceSeeker;
        }

        public String toString() {
            return "JP_Experience [experienceId=" . $experienceId . ", experienceStartDate=" . $experienceStartDate
                    . ", experienceEndDate=" . $experienceEndDate . ", experienceCompany=" . $experienceCompany
                    . ", experiencePosition=" . $experiencePosition . ", experienceSeeker=" . $experienceSeeker . "]";
        }
}

?>