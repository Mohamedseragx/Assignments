<?php
$students = array(
    array('name' => 'mohamed', 'age' => 20),
    array('name' => 'omar', 'age' => 22),
    array('name' => 'khaled', 'age' => 21)
);
?>

<ul>
<?php foreach ($students as $student): ?>
    <li><?php echo $student['name']; ?> (<?php echo $student['age']; ?> years old)</li>
<?php endforeach;
 ?>
</ul>