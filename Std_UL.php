<?php
$students = array(
    array('name' => 'Mohamed', 'age' => 20),
    array('name' => 'Omar', 'age' => 22),
    array('name' => 'Khaled', 'age' => 21)
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <ul>
        <?php foreach ($students as $student): ?>
            <li><?php echo $student['name']; ?> (<?php echo $student['age']; ?> years old)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>