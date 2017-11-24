<?php
class Skillset{
    public function __construct(){
        echo "<script>alert('Skillset Class triggered');</script>";
    }
        private $skillsetId;
        private $skillsetSkill;
    
        public function getSkillsetId() {
            return $this->skillsetId;
        }
    
        public function setSkillsetId($skillsetId) {
            $this->skillsetId = $skillsetId;
        }
    
        public function getSkillsetSkill() {
            return $this->skillsetSkill;
        }
    
        public function setSkillsetSkill($skillsetSkill) {
            $this->skillsetSkill = $skillsetSkill;
        }
    
        public String toString() {
            return "JP_Skillset [skillsetId=" . $skillsetId . ", skillsetSkill=" . $skillsetSkill . "]";
        }
    

}
?>