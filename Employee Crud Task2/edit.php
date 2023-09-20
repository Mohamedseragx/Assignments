<?php
require_once 'includes/connection.php';
$id=$_GET['id'];
if(isset($_POST['Name'])){
    $name=$_POST['Name'];
    $salary=$_POST['Salary'];
    $address=$_POST['Address'];
    $gender=$_POST['gender'];
    $sql="UPDATE employees SET name='$Same',salary='$Salary',Address='$Address',gender='$Gender' WHERE Id=$Id";
    $updateRes=mysqli_query($conn,$sql);
    if($updateRes){
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once 'includes/head.php'; ?>
</head>
<body>
    <h2 class="my-5 text-center container p-3 w-50 bg-success opacity-75 text-light border shadow">
        Update Employee
    </h2>
    <?php 
    $selectSql= "SELECT * FROM employees WHERE id=$id";
    $selectedData=mysqli_query($conn,$selectSql);
    $row=mysqli_fetch_assoc($selectedData);
    ?>
    <div class="container bg-light p-5 mx-auto w-50 border shadow">
        <form action="" method="post">
            <div class="form-group my-1">
                <label for="Name">Employee Name</label>
            <input type="text" class="form-control"name="name" placeholder="Employee Name" value="<?php echo $row['Name']?>"></div>
            <div class="form-group my-1">
                <label for="salary">Employee salary</label>
            <input type="Number" class="form-control" name="salary" placeholder="Employee Salary" value="<?php echo $row['Salary']?>"></div>
            <div class="form-group my-1">
                <label for="Address">Employee Address</label>
            <input type="text" class="form-control" name="Address" placeholder="Employee Address" value="<?php echo $row['Address']?>"></div>
            <div class="form-group mt-2 mb-1">
                <label for="Male" class="mx-1">Male</label>
                <input type="radio" name="gender" value="Male"
                <?php echo $row['Gender']=='Male' ? "checked":""?>
                >
                <label for="Female" class="mx-1">Female</label>
                <input type="radio" name="gender" value="Female"
                <?php echo $row['Gender']=='Female' ? "checked":""?> >
        </div>
        <input type="submit" value="edit Employee" class="mt-3 mx-1 btn btn-success" name="edit_employee">
        <a href="index.php" class="mx-1 mt-3 btn btn-info">Return To Index</a>
        </form>
    </div>
</body>
</html>