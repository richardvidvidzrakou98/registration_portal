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
    <style>
    /* .register-btn.registered:before {
        content: "\2713";
        color: green;
    } */
    </style>

<script>
    

    $(document).ready(function() {
    $('button#submit').click(function() {
        //Get the course id
         var courseId = $(this).closest('tr').find('td:first').text();
        //  var courseId = 1;
        alert(courseId);

        // var row = $(this).closest('tr');
        // var rowData = row.find('td').map(function(){
        //     return $(this).text();
        // }).get();
        // console.log(rowData);

        $.ajax({
            type: 'POST',
            url: 'register_course.php',
            data: {
                 courseId: courseId
                 },
            cache: false,
            success: function(response) {
                //alert(response);
        },
        error: function(xhr, status, error) {
            // Handle any errors that occur during the AJAX request
            //console.log('Error storing data: ' + error);
            console.log(xhr.responseText);
            console.log('Error: ' + error);
        }
        });




       
    });
});
</script>

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


        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     if (isset($_POST['courseId']) && !empty($_POST['courseId'])) {
        //         $courseId = $_POST['courseId'];
        //         error_log('Received courseId: ' . $courseId);
        //         // Process the data and save it to the database
        //         // ...
        //         echo 'Data received and processed successfully!';
        //     } else {
        //         echo 'Course ID not received.';
        //     }
        // } else {
        //     echo 'Invalid request.';
        // }



        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['course_code'] . "</td>";
                echo "<td>" . $row['course_title'] . "</td>";
                echo "<td>" . $row['credit'] . "</td>";
                echo "<td>" . "<button id='submit'>register</button>" . "</td>";
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