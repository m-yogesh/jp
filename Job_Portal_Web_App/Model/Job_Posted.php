<?php
class Job_Posted{
    public function __construct(){
        echo "<script>alert('Job Posted Class triggered');</script>";
    }

	private $jobPostedId;
	private $jobTitle;
	private $description;
	private $salary;
	private $requiredQualification;
	private $endDate;
	private $isActive;
	private $otherInfo;
	private $jobSkills;
	private $company = new Company();

	public function getJobPostedId() {
		return $this->jobPostedId;
	}

	public function setJobPostedId($jobPostedId) {
		$this->jobPostedId = $jobPostedId;
	}

	public function getJobTitle() {
		return $this->jobTitle;
	}

	public function setJobTitle($jobTitle) {
		$this->jobTitle = $jobTitle;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function getSalary() {
		return $this->salary;
	}

	public function setSalary($salary) {
		$this->salary = $salary;
	}

	public function getRequiredQualification() {
		return $this->requiredQualification;
	}

	public function setRequiredQualification($requiredQualification) {
		$this->requiredQualification = $requiredQualification;
	}

	public function getEndDate() {
		return $this->endDate;
	}

	public function setEndDate($endDate) {
		$this->endDate = $endDate;
	}

	public function isActive() {
		return $this->isActive;
	}

	public function setActive($isActive) {
		$this->isActive = $isActive;
	}

	public function getOtherInfo() {
		return $this->otherInfo;
	}

	public function setOtherInfo($otherInfo) {
		$this->otherInfo = $otherInfo;
	}

	public function getJobSkills() {
		return $this->jobSkills;
	}

	public function setJobSkills($jobSkills) {
		$this->jobSkills = $jobSkills;
	}

	public function getCompany() {
		return $this->company;
	}

	public function setCompany($company) {
		$this->company = $company;
	}

	public String toString() {
		return "JP_Job_Posted [jobPostedId=" . $jobPostedId . ", jobTitle=" . $jobTitle . ", description=" . $description
				. ", salary=" . $salary . ", requiredQualification=" . $requiredQualification . ", endDate=" . $endDate
				. ", isActive=" . $isActive . ", otherInfo=" . $otherInfo . ", jobSkills=" . $jobSkills . ", company="
				. $company . "]";
	}
}

?>