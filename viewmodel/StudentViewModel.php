<?php
require_once 'model/Student.php';

class StudentViewModel {
    private $student;

    public function __construct() {
        $this->student = new Student();
    }

    public function getStudentList() {
        return $this->student->getAll();
    }

    public function getStudentById($id) {
        return $this->student->getById($id);
    }

    public function addStudent($name, $email) {
        return $this->student->create($name, $email);
    }

    public function updateStudent($id, $name, $email) {
        return $this->student->update($id, $name, $email);
    }

    public function deleteStudent($id) {
        return $this->student->delete($id);
    }
}
?>
