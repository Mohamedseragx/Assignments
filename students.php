<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve student information from the form
    $name = $_POST['name'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];

    // Print student information in an unordered list
    echo "<ul>";
    echo "<li>الاسم: $name</li>";
    echo "<li>العمر: $age</li>";
    echo "<li>التقدير: $grade</li>";
    echo "</ul>";
}
?>

<!-- HTML form -->
<form method="POST" action="">
    <label for="name">الاسم:</label>
    <input type="text" name="name" id="name" required><br><br>
    
    <label for="age">العمر:</label>
    <input type="number" name="age" id="age" required><br><br>
    
    <label for="grade">التقدير:</label>
    <input type="text" name="grade" id="grade" required><br><br>
    
    <input type="submit" value="إرسال">
</form>