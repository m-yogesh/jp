<?php
class Apply{
	public function __construct(){
        echo "<script>alert('Apply Class triggered');</script>";
    }

    /* Member variables */
    private $jobApplyId;

	private $applyDateSubmitted;

	private $applyStatus;

	private $applySeeker = new Seeker();

	private $applyJobPosted = new Job_Posted();

	public function getJobApplyId() {
		return $this->$jobApplyId;
	}

	public function setJobApplyId($jobApplyId1) {
		$this->$jobApplyId = $jobApplyId1;
	}

	public function getApplyDateSubmitted() {
		return $this->$applyDateSubmitted;
	}

	public function setApplyDateSubmitted($applyDateSubmitted_) {
		$this->$applyDateSubmitted = $applyDateSubmitted_;
	}

	public function getApplyStatus() {
		return $this->$applyStatus;
	}

	public function setApplyStatus($applyStatus_) {
		$this->$applyStatus = $applyStatus_;
	}

	public function getApplySeeker() {
		return $this->$applySeeker;
	}

	public function setApplySeeker(Seeker $seeker) {
		$this->$applySeeker = $seeker;
	}

	public function getApplyJobPosted() {
		return $this->$applyJobPosted;
	}

	public void setApplyJobPosted(Job_Posted $applyJobPosted_) {
		$this->$applyJobPosted = $applyJobPosted_;
	}

	public function toString() {
		return "JP_Apply [jobApplyId=" . $this->$jobApplyId . ", applyDateSubmitted=" . $this->$applyDateSubmitted . ", applyStatus="
        $this->$applyStatus . ", applySeeker=" . $this->$applySeeker . ", applyJobPosted=" . $this->$applyJobPosted . "]";
	}
}
?>