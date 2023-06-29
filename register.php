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
    .register-btn.registered:before {
        content: "\2713";
        color: green;
    }
    </style>

<script>
    // $(document).ready(function() {
    //     $('.register-btn').click(function() {
    //         var courseId = $(this).data('course-id');
    //         // alert(courseId);
    //         var btn = $(this);

    //         // Send AJAX request to save the registered course to the database
    //         $.ajax({
    //             url: 'register_course.php',
    //             method: 'POST',
    //             data: { courseId: courseId },
    //             success: function(response) {
    //                 console.log(response);
    //                 if (response === 'success') {
    //                     // Update button appearance
    //                     btn.addClass('registered').text('').attr('disabled', true);
    //                 }
    //             }
    //         });
    //     });
    // });

    

    $(document).ready(function() {
    $('button#register').click(function() {
        // Get the course id
        // var courseId = $(this).closest('tr').find('td:first').text();
        // alert(courseId);

        var row = $(this).closest('tr');
        var rowData = row.find('td').map(function(){
            return $(this).text();
        }).get();
        console.log(rowData);

        $.ajax({
         url: 'register_course.php',
        type: 'POST',
        
        data: { courseId: courseId },
        success: function(response) {
            // Handle the response from the server if needed
            console.log('Data stored successfully');
        },
        error: function(xhr, status, error) {
            // Handle any errors that occur during the AJAX request
            console.log('Error storing data: ' + error);
        }
        });




        // Update the button text and style
        //$(this).text('Registered').css('background-color', 'green');

        // Send the course id to the registered_courses database
        // $.ajax({
        //     url: 'register.php',
        //     data: { courseId: $(this).closest('tr').find('td:first').text() },
        //     //data: { courseId: courseId },
        //     type: 'POST',
        //     success: function() {
        //         // Show a success message
        //         alert('Course successfully registered!');
        //     },
        //     error: function() {
        //         // Show an error message
        //         alert('Error registering course!');
        //     }
        // });
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
        // if ($result) {
        //     while ($row = mysqli_fetch_assoc($result)) {
        //         echo "<tr>";
        //         echo "<td>" . $row['id'] . "</td>";
        //         echo "<td>" . $row['course_code'] . "</td>";
        //         echo "<td>" . $row['course_title'] . "</td>";
        //         echo "<td>" . $row['credit'] . "</td>";
        //         echo '<td><button class="register-btn" data-course-id="' . $row['id'] . '">Register</button></td>';
        //         echo "</tr>";
        //     }
        // } else {
        //     echo "Data not found.";
        // }

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['course_code'] . "</td>";
                echo "<td>" . $row['course_title'] . "</td>";
                echo "<td>" . $row['credit'] . "</td>";
                echo "<td>" . "<button id='register'>Register</button>" . "</td>";
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