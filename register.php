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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="./css/register.css">

</head>
<body>
    <div class="header"><h2 style="position: absolute; top: -9%;">Get Registered</h2></div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col" style="text-align: left;">No.</th>
                <th scope="col" style="text-align: left;">Course Code</th>
                <th scope="col" style="text-align: left;">Course Title</th>
                <th scope="col"style="text-align: left;">Credit</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `browse_courses`";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                    echo '<form action="register.php" method="POST">';
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['course_code'] . "</td>";
                    echo "<td>" . $row['course_title'] . "</td>";
                    echo "<td>" . $row['credit'] . "</td>";
                    echo '<td>';
                    echo '<button type="submit" class="register-button" onclick="registerCourse(this);">Register</button>';
                    echo '<input type="hidden" name="courseId" value="' . $row['id'] . '">';
                    echo '<input type="hidden" name="courseCode" value="' . $row['course_code'] . '">';
                    echo '<input type="hidden" name="courseTitle" value="' . $row['course_title'] . '">';
                    echo '<input type="hidden" name="credit" value="' . $row['credit'] . '">';
                    echo '</td>';
                    //echo "<td>" . '<button type="button" onclick="getRowData();" class="register-button" data-id="' . $row['id'] . '">register</button>' . "</td>";
                    echo "</tr>";
                    echo '</form>';
                    

            }
        } else {
            echo "Data not found.";
        }
        ?>

        </tbody>
    </table>

    <?php

   

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['courseId'], $_POST['courseCode'], $_POST['courseTitle'], $_POST['credit'])) {
        $courseId = $_POST['courseId'];
        $courseCode = $_POST['courseCode'];
        $courseTitle = $_POST['courseTitle'];
        $credit = $_POST['credit'];

        // Perform necessary validations and sanitation on the received data

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }



        // Check if the course is already registered

        $checkSql = "SELECT * FROM registered_courses WHERE id = '$courseId'";
        $result = $conn->query($checkSql);

        if ($result === false) {
            echo "Error: " . $checkSql . "<br>" . $conn->error;
        } else {
            if ($result->num_rows > 0) {
             echo "Error: Course is already registered.";
        } else {
        // Prepare the insert query
        $insertSql = "INSERT INTO registered_courses (id, course_code, course_title, credit, status)
                      VALUES ('$courseId', '$courseCode', '$courseTitle', '$credit', 'registered')";

        // Execute the insert query
        if ($conn->query($insertSql) === TRUE) {
            echo "New record inserted successfully.";
            //header("Location: " . $_SERVER['PHP_SELF']);

        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
        
    }
    
}



?>

</body>
</html>