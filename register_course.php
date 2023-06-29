<?php
include 'connection.php';

$courseId = $_POST['courseId'];
// print $_POST['courseId'];
print_r($_POST);
die

// Assuming you have established a connection to the database

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Retrieve the course ID from the AJAX request
//     $courseId = $_POST['courseId'];
//     echo "TEST";
//     echo $courseId;

//     // Perform necessary database operations to save the registered course
//     $sql = "INSERT INTO registered_courses (course_id) VALUES ('$courseId')"; // Assuming you have a table called 'registered_courses' with a column 'course_id'
//     if (mysqli_query($conn, $sql)) {
//         // Registration successful
//         echo 'success';
//     } else {
//         // Registration failed
//         echo 'error';
//     }
// } else {
//     echo 'Invalid request.';
// }
// Insert the course id into the database
// $sql = "INSERT INTO registered_courses (courseId) VALUES ('" . $_POST['courseId'] . "')";
// if (mysqli_query($conn, $sql) === false) {
//     exit('Error registering course!');
// }



// Check if the course id is valid
// if (!isset($_POST['courseId'])) {
//     exit('Error: Course id not specified!');
// }

// // Insert the course id into the database
// $sql = "INSERT INTO registered_courses (courseId) VALUES ('" . $_POST['courseId'] . "')";
// if (mysqli_query($conn, $sql) === false) {
//     exit('Error registering course!');
// }

// Close the database connection
//mysqli_close($conn);

// Redirect to the home page
//header('Location: index.php');
?>

