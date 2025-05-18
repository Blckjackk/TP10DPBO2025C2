<?php require_once 'views/template/header.php'; ?>

<h2 class="text-xl mb-4"><?php echo isset($enrollment) ? 'Edit Enrollment' : 'Add Enrollment'; ?></h2>

<form action="index.php?entity=enrollment&action=<?php echo isset($enrollment) ? 'update&id=' . $enrollment['id'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Student:</label>
        <select name="student_id" class="border p-2 w-full" required>
            <option value="">-- Select Student --</option>
            <?php foreach ($students as $student): ?>
                <option value="<?php echo $student['id']; ?>" <?php echo isset($enrollment) && $enrollment['student_id'] == $student['id'] ? 'selected' : ''; ?>>
                    <?php echo $student['name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label class="block">Subject:</label>
        <select name="subject_id" class="border p-2 w-full" required>
            <option value="">-- Select Subject --</option>
            <?php foreach ($subjects as $subject): ?>
                <option value="<?php echo $subject['id']; ?>" <?php echo isset($enrollment) && $enrollment['subject_id'] == $subject['id'] ? 'selected' : ''; ?>>
                    <?php echo $subject['name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label class="block">Semester:</label>
        <input type="text" name="semester" value="<?php echo $enrollment['semester'] ?? ''; ?>" class="border p-2 w-full" required>
    </div>

    <div>
        <label class="block">Grade:</label>
        <input type="text" name="grade" value="<?php echo $enrollment['grade'] ?? ''; ?>" class="border p-2 w-full">
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php require_once 'views/template/footer.php'; ?>
