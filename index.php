<?php
require_once 'viewmodel/StaffViewModel.php';
require_once 'viewmodel/DepartmentViewModel.php';
require_once 'viewmodel/ShiftViewModel.php';
require_once 'viewmodel/StudentViewModel.php';
require_once 'viewmodel/SubjectViewModel.php';
require_once 'viewmodel/EnrollmentViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'student';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity == 'staff') {
    $viewModel = new StaffViewModel();
    if ($action == 'list') {
        $staffList = $viewModel->getStaffList();
        require_once 'views/staff_list.php';
    } elseif ($action == 'add') {
        $departments = $viewModel->getDepartments();
        $shifts = $viewModel->getShifts();
        require_once 'views/staff_form.php';
    } elseif ($action == 'edit') {
        $staff = $viewModel->getStaffById($_GET['id']);
        $departments = $viewModel->getDepartments();
        $shifts = $viewModel->getShifts();
        require_once 'views/staff_form.php';
    } elseif ($action == 'save') {
        $viewModel->addStaff($_POST['name'], $_POST['department_id'], $_POST['shift_id']);
        header('Location: index.php?entity=staff');
    } elseif ($action == 'update') {
        $viewModel->updateStaff($_GET['id'], $_POST['name'], $_POST['department_id'], $_POST['shift_id']);
        header('Location: index.php?entity=staff');
    } elseif ($action == 'delete') {
        $viewModel->deleteStaff($_GET['id']);
        header('Location: index.php?entity=staff');
    }
} elseif ($entity == 'department') {
    $viewModel = new DepartmentViewModel();
    if ($action == 'list') {
        $departmentList = $viewModel->getDepartmentList();
        require_once 'views/department_list.php';
    } elseif ($action == 'add') {
        require_once 'views/department_form.php';
    } elseif ($action == 'edit') {
        $department = $viewModel->getDepartmentById($_GET['id']);
        require_once 'views/department_form.php';
    } elseif ($action == 'save') {
        $viewModel->addDepartment($_POST['name']);
        header('Location: index.php?entity=department');
    } elseif ($action == 'update') {
        $viewModel->updateDepartment($_GET['id'], $_POST['name']);
        header('Location: index.php?entity=department');
    } elseif ($action == 'delete') {
        $viewModel->deleteDepartment($_GET['id']);
        header('Location: index.php?entity=department');
    }
} elseif ($entity == 'shift') {
    $viewModel = new ShiftViewModel();
    if ($action == 'list') {
        $shiftList = $viewModel->getShiftList();
        require_once 'views/shift_list.php';
    } elseif ($action == 'add') {
        require_once 'views/shift_form.php';
    } elseif ($action == 'edit') {
        $shift = $viewModel->getShiftById($_GET['id']);
        require_once 'views/shift_form.php';
    } elseif ($action == 'save') {
        $viewModel->addShift($_POST['shift_name']);
        header('Location: index.php?entity=shift');
    } elseif ($action == 'update') {
        $viewModel->updateShift($_GET['id'], $_POST['shift_name']);
        header('Location: index.php?entity=shift');
    } elseif ($action == 'delete') {
        $viewModel->deleteShift($_GET['id']);
        header('Location: index.php?entity=shift');
    }
} elseif ($entity == 'student') {
    $viewModel = new StudentViewModel();
    if ($action == 'list') {
        $studentList = $viewModel->getStudentList();
        require_once 'views/student_list.php';
    } elseif ($action == 'add') {
        require_once 'views/student_form.php';
    } elseif ($action == 'edit') {
        $student = $viewModel->getStudentById($_GET['id']);
        require_once 'views/student_form.php';
    } elseif ($action == 'save') {
        $viewModel->addStudent($_POST['name'], $_POST['email']);
        header('Location: index.php?entity=student');
    } elseif ($action == 'update') {
        $viewModel->updateStudent($_GET['id'], $_POST['name'], $_POST['email']);
        header('Location: index.php?entity=student');
    } elseif ($action == 'delete') {
        $viewModel->deleteStudent($_GET['id']);
        header('Location: index.php?entity=student');
    }
} elseif ($entity == 'subject') {
    $viewModel = new SubjectViewModel();
    if ($action == 'list') {
        $subjectList = $viewModel->getSubjectList();
        require_once 'views/subject_list.php';
    } elseif ($action == 'add') {
        require_once 'views/subject_form.php';
    } elseif ($action == 'edit') {
        $subject = $viewModel->getSubjectById($_GET['id']);
        require_once 'views/subject_form.php';
    } elseif ($action == 'save') {
        $name = $_POST['name'];
        $credit = $_POST['credit'];
        $viewModel->addSubject($name, $credit);
        header('Location: index.php?entity=subject');
    } elseif ($action == 'update') {
        $viewModel->updateSubject($_GET['id'], $_POST['name'], $_POST['credit']);
        header('Location: index.php?entity=subject');
    } elseif ($action == 'delete') {
        $viewModel->deleteSubject($_GET['id']);
        header('Location: index.php?entity=subject');
    }
} elseif ($entity == 'enrollment') {
    $viewModel = new EnrollmentViewModel();
    if ($action == 'list') {
        $enrollmentList = $viewModel->getEnrollmentList();
        require_once 'views/enrollment_list.php';
    } elseif ($action == 'add') {
        $students = (new StudentViewModel())->getStudentList();
        $subjects = (new SubjectViewModel())->getSubjectList();
        require_once 'views/enrollment_form.php';
    } elseif ($action == 'edit') {
        $enrollment = $viewModel->getEnrollmentById($_GET['id']);
        $students = (new StudentViewModel())->getStudentList();
        $subjects = (new SubjectViewModel())->getSubjectList();
        require_once 'views/enrollment_form.php';
    } elseif ($action == 'save') {
        $viewModel->addEnrollment($_POST['student_id'], $_POST['subject_id'], $_POST['semester'], $_POST['grade']);
        header('Location: index.php?entity=enrollment');
    } elseif ($action == 'update') {
        $viewModel->updateEnrollment($_GET['id'], $_POST['student_id'], $_POST['subject_id'], $_POST['semester'], $_POST['grade']);
        header('Location: index.php?entity=enrollment');
    } elseif ($action == 'delete') {
        $viewModel->deleteEnrollment($_GET['id']);
        header('Location: index.php?entity=enrollment');
    }
}
?>
