<?php
require_once 'model/Subject.php';

class SubjectViewModel {
    private $subject;

    public function __construct() {
        $this->subject = new Subject();
    }

    public function getSubjectList() {
        return $this->subject->getAll();
    }

    public function getSubjectById($id) {
        return $this->subject->getById($id);
    }

    public function addSubject($name, $credit) {
        return $this->subject->create($name, $credit);
    }

    public function updateSubject($id, $name, $credit) {
        return $this->subject->update($id, $name, $credit);
    }

    public function deleteSubject($id) {
        return $this->subject->delete($id);
    }
}
?>
