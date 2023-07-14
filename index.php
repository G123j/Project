<?php
include_once 'connection.php';
$result = mysqli_query($conn, "SELECT * FROM department");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="form_style">
        <div class="container">
            <form action="data.php" method="POST">
                <h2 class="text-center">-: Sample Data :-</h2>

                <div class="form-group">
                    <label for="">Name:</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter Name" required>
                </div>

                <div class="form-group">
                    <label for="">Age:</label>
                    <input type="text" name="age" class="form-control" 
                       placeholder="Enter Age" required>
                </div>

                <div class="form-group">
                    <label for="">Choose Department:</label>
                    <select name="department" class="form-control" id="">
                        <?php
                        // fetch the department using a while loop....
                        while ($row = mysqli_fetch_assoc($result)) {
                            $department = $row['department'];
                            echo "<option value='$department'>$department</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Salary:</label>
                    <input type="text" class="form-control" name="salary" id=""
                        placeholder="Salary" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <a link href="fetch.php" class="btn btn-dark">Result</a>

            </form>
        </div>
    </div>
</body>

</html>
