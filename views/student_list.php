<?php require_once 'views/template/header.php'; ?>

<h2 class="text-xl mb-4">Student List</h2>
<a href="index.php?entity=student&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Student</a>

<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Name</th>
        <th class="border p-2">Email</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($studentList as $student): ?>
    <tr>
        <td class="border p-2"><?php echo $student['name']; ?></td>
        <td class="border p-2"><?php echo $student['email']; ?></td>
        <td class="border p-2">
            <a href="index.php?entity=student&action=edit&id=<?php echo $student['id']; ?>" class="text-blue-500">Edit</a>
            <a href="index.php?entity=student&action=delete&id=<?php echo $student['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Apakah Anda yakin?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'views/template/footer.php'; ?>
