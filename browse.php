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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./css/browse.css">
</head>
<body>
    <div class="header"><h2 style="position: absolute; top: -9%;">Available Courses</h2></div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col" style="text-align: left;">No.</th>
                <th scope="col" style="text-align: left;">Course Code</th>
                <th scope="col" style="text-align: left;">Course Title</th>
                <th scope="col"style="text-align: left;">Credit</th>
                <th scope="col" style="text-align: left;">Status</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $sql = "SELECT * FROM `browse_courses`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
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
    </table><br><br>
    <div class="message" style="width: 60%">
        <p class="paragraph-message"><b>These are all the available courses for the semester. Go to the registration page to register.</b>
        </p>
            <a href="register.php">
                <button class="btn" style="margin-left: 30%; border-radius: 3px;"><a href="register.php">Register here</a> </button>
            </a>
    </div>

</body>
</html>