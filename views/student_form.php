<?php require_once 'views/template/header.php'; ?>

<h2 class="text-xl mb-4"><?php echo isset($student) ? 'Edit Student' : 'Add Student'; ?></h2>

<form action="index.php?entity=student&action=<?php echo isset($student) ? 'update&id=' . $student['id'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Name:</label>
        <input type="text" name="name" value="<?php echo $student['name'] ?? ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Email:</label>
        <input type="email" name="email" value="<?php echo $student['email'] ?? ''; ?>" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php require_once 'views/template/footer.php'; ?>
