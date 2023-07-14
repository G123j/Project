<?php
include_once 'connection.php';
$result = mysqli_query($conn, "SELECT * FROM employee");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <style>
    .container {
        display: flex;
        justify-content: center;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        margin-top: 50px;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        width: 170px;
    }

    th {
        background-color: lightblue;
    }

    .my-button {
        position: absolute;
        left: 74%;
    top: 8%;
    }
</style>
</head>
<body>
<h2 class="text-center" style="text-align: center;">-: Sample Data :-</h2>
<a class="my-button btn btn-dark" href="index.php">Add</a>


    <div class="container">

   
        <?php
        if (mysqli_num_rows($result) > 0) {
            ?>
            <table>
              
                <tr>
                <th>No.</th>
                    <th>First Name</th>
                    <th>Age</th>
                    <th>Department</th>
                    <th>Salary</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                    <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["age"]; ?></td>
                        <td><?php echo $row["department"]; ?></td>
                        <td><?php echo $row["salary"]; ?></td>
                    </tr>
                    <?php
                }
                ?>
                
            </table>
            
            <?php
        } else {
            echo "No result found";
        }
        ?>
                     
    </div>



</body>
</html>
