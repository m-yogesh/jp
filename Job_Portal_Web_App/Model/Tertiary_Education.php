<?php
class Tertiary_Education{
    public function __construct(){
        echo "<script>alert('Tertiary Education Class triggered');</script>";
    }
        private $tertiaryId;
        private $grade;
        private $institude;
        private $yearOfCompletion;
        private $courseName;
        private $seeker = new Seeker();
    
        public function getTertiaryId() {
            return $this->tertiaryId;
        }
    
        public function setTertiaryId($tertiaryId) {
            $this->tertiaryId = $tertiaryId;
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
    
        public function getYearOfCompletion() {
            return $this->yearOfCompletion;
        }
    
        public function setYearOfCompletion($yearOfCompletion) {
            $this->yearOfCompletion = $yearOfCompletion;
        }
    
        public function getCourseName() {
            return $this->courseName;
        }
    
        public function setCourseName($courseName) {
            $this->courseName = $courseName;
        }
    
        public function getSeeker() {
            return $this->seeker;
        }
    
        public function setSeeker($seeker) {
            $this->seeker = $seeker;
        }
    
        public String toString() {
            return "JP_Tertiary_Education [tertiaryId=" . $tertiaryId . ", grade=" . $grade . ", institude=" . $institude
                    . ", yearOfCompletion=" . $yearOfCompletion . ", courseName=" . $courseName . ", seeker=" . $seeker . "]";
        }

}
?>