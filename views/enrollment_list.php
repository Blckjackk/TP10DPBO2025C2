<?php require_once 'views/template/header.php'; ?>

<h2 class="text-xl mb-4">Enrollment List</h2>
<a href="index.php?entity=enrollment&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Enrollment</a>

<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Student</th>
        <th class="border p-2">Subject</th>
        <th class="border p-2">Semester</th>
        <th class="border p-2">Grade</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($enrollmentList as $enroll): ?>
    <tr>
        <td class="border p-2"><?php echo $enroll['student_name']; ?></td>
        <td class="border p-2"><?php echo $enroll['subject_name']; ?></td>
        <td class="border p-2"><?php echo $enroll['semester']; ?></td>
        <td class="border p-2"><?php echo $enroll['grade']; ?></td>
        <td class="border p-2">
            <a href="index.php?entity=enrollment&action=edit&id=<?php echo $enroll['id']; ?>" class="text-blue-500">Edit</a>
            <a href="index.php?entity=enrollment&action=delete&id=<?php echo $enroll['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Apakah Anda yakin?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'views/template/footer.php'; ?>
