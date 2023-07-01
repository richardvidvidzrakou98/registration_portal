<?php 


// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Retrieve the courseId sent from the AJAX request
//     $courseId = $_POST['courseId'];

//     echo 'Data received and processed successfully!';
// }else{
//     echo 'Data not received';
// }

// if (isset($_POST['courseId']) && !empty($_POST['courseId'])) {
//     $courseId = $_POST['courseId'];
//     // Process the data and save it to the database
//     // ...
// } else {
//     echo 'Course ID not received.';
// }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['courseId']) && !empty($_POST['courseId'])) {
        $courseId = $_POST['courseId'];
        error_log('Received courseId: ' . $courseId);
        // Process the data and save it to the database
        // ...
        echo 'Data received and processed successfully!';
    } else {
        echo 'Course ID not received.';
    }
} else {
    echo 'Invalid request.';
}

