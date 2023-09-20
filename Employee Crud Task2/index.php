<?php require_once 'includes/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <header  class="bg-primary text-lighr text-center p-3">
        <h2>Employee Crud Demo</h2>
    </header>
    <section class="my-5 container">
        <a href="add.php" class="btn btn-dark mb-3"> Add Employee</a>

        <table class="table table-bordered text-center mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Employee Name</th>
                    <th>Employee salary</th>
                    <th>Employee Address</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM employees";
                    $selectedemployees = mysqli_query($conn , $sql);
                    while($row = mysqli_fetch_assoc($selectedemployees)){
                ?>
                    <tr>
                        <td><?php echo $row["ID"] ?></td>
                        <td><?php echo $row["Name"] ?></td>
                        <td><?php echo $row["Salary"] ?></td>
                        <td><?php echo $row["Address"] ?></td>
                        <td><?php echo $row["Gender"] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row["ID"];?>
                            " class="btn btn-sm btn-success mx-1">update</a>
                            <a href="delete.php?id=<?php echo $row["ID"];?>
                            " class="btn btn-sm btn-danger mx-1">delete</a>
                        </td>
                    </tr>
                
                <?php } ?>
            </tbody>
        </table>
    </section>
</body>
</html>