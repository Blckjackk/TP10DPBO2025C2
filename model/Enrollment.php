<?php
require_once 'config/Database.php';

class Enrollment {
    private $conn;
    private $table = 'enrollment';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Ambil semua data enrollment
    public function getAll() {
        $query = "SELECT e.id, s.name AS student_name, sub.name AS subject_name, e.semester, e.grade
                  FROM " . $this->table . " e
                  JOIN student s ON e.student_id = s.id
                  JOIN subject sub ON e.subject_id = sub.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Ambil 1 data enrollment berdasarkan ID
    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Tambah data enrollment
    public function create($student_id, $subject_id, $semester, $grade) {
        $query = "INSERT INTO " . $this->table . " (student_id, subject_id, semester, grade)
                  VALUES (:student_id, :subject_id, :semester, :grade)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':student_id', $student_id, PDO::PARAM_INT);
        $stmt->bindParam(':subject_id', $subject_id, PDO::PARAM_INT);
        $stmt->bindParam(':semester', $semester);
        $stmt->bindParam(':grade', $grade);
        return $stmt->execute();
    }

    // Update data enrollment
    public function update($id, $student_id, $subject_id, $semester, $grade) {
        $query = "UPDATE " . $this->table . " 
                  SET student_id = :student_id, subject_id = :subject_id, semester = :semester, grade = :grade
                  WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':student_id', $student_id, PDO::PARAM_INT);
        $stmt->bindParam(':subject_id', $subject_id, PDO::PARAM_INT);
        $stmt->bindParam(':semester', $semester);
        $stmt->bindParam(':grade', $grade);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Hapus data enrollment
    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>
