<?php
include 'connection.php';
include 'form-common.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/courses.css">
</head>
<body>
    <div class="header"><h2 style="position: absolute; top: -9%;">Registered Courses</h2></div>

    <table class="table">
        <thead>
            <tr>                <th scope="col" style="text-align: left;">Course Code</th>
                <th scope="col" style="text-align: left;">Course Title</th>
                <th scope="col"style="text-align: left;">Credit</th>
                <th scope="col" style="text-align: left;">Status</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $sql = "SELECT * FROM `registered_courses`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['course_code'] . "</td>";
                echo "<td>" . $row['course_title'] . "</td>";
                echo "<td>" . $row['credit'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "Data not found.";
        }
        ?>
        
        </tbody>
    </table>
</body>
</html>