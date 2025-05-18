<?php
require_once 'model/Enrollment.php';

class EnrollmentViewModel {
    private $enrollment;

    public function __construct() {
        $this->enrollment = new Enrollment();
    }

    public function getEnrollmentList() {
        return $this->enrollment->getAll();
    }

    public function getEnrollmentById($id) {
        return $this->enrollment->getById($id);
    }

    public function addEnrollment($student_id, $subject_id, $semester, $grade) {
        return $this->enrollment->create($student_id, $subject_id, $semester, $grade);
    }

    public function updateEnrollment($id, $student_id, $subject_id, $semester, $grade) {
        return $this->enrollment->update($id, $student_id, $subject_id, $semester, $grade);
    }

    public function deleteEnrollment($id) {
        return $this->enrollment->delete($id);
    }
}
?>
