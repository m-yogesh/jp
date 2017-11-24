<?php
class List_Certification{
    public function __construct(){
        echo "<script>alert('List certification Class triggered');</script>";
    }
        private $id;
        private $course_name;
        private $isActive;
    
        public function getId() {
            return $this->id;
        }
    
        public function setId($id) {
            $this->id = $id;
        }
    
        public function getCourse_name() {
            return $this->course_name;
        }
    
        public function setCourse_name($course_name) {
            $this->course_name = $course_name;
        }
    
        public function isActive() {
            return isActive;
        }
    
        public function setActive($isActive) {
            $this->isActive = $isActive;
        }
    
        public String toString() {
            return "JP_List_Certification [id=" . $id . ", course_name=" . $course_name . ", isActive=" . $isActive . "]";
        }

}

?>