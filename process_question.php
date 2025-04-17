<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "courses";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ... (previous code remains unchanged)

// Check if the 'question' parameter is set in the POST request
if (isset($_POST['question'])) {
    $question = strtolower($_POST['question']);
     // Replace this with the actual id value you want to use

    // Initialize $sql variable
    $sql = "";

    if (strpos($question, "code") !== false && strpos($question, "course") !== false) {
        // SQL query to get the code from the database using the provided id
        $sql = "SELECT code FROM courses_info" ;
    } elseif (strpos($question, "assignments") !== false && strpos($question, "course") !== false) {
        // SQL query to get assignments
        $sql = "SELECT assignments FROM courses_info";
    } elseif (strpos($question, "lecturers") !== false && strpos($question, "course") !== false) {
        // SQL query to get lecturers
        $sql = "SELECT lecturers FROM courses_info";
    } elseif (strpos($question, "quize") !== false){
        // SQL query to get quize
        $sql = "SELECT marks_quize FROM courses_info";
    } elseif (strpos($question, "project") !== false ) {
        // SQL query to get project
        $sql = "SELECT  marks_project FROM courses_info";
    } elseif (strpos($question, "mid term") !== false) {
        // SQL query to get midterm
        $sql = "SELECT marks_mid_term FROM courses_info" ;
    } elseif (strpos($question, "finel exam") !== false) {
        // SQL query to get finalexam
        $sql = "SELECT  marks_finel_exam FROM courses_info";
    } elseif (strpos($question, "pass") !== false) {
        // SQL query to get pass
        $sql = "SELECT degree_of_pass FROM courses_info";
    }

    if (!empty($sql)) {
        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
				$answer = "<span style='font-family: cursive;'>The answer is:</span><strong><span style='color: green;font-family: cursive;margin-left: 14px;font-size: large;'>" . $row[array_key_first($row)] . "</span></strong>";

            } else {
                $answer = "No result found";
            }
        } else {
            // Handle query execution error
            $answer = "Error executing the query: " . $conn->error;
        }
    } else {
        // No specific condition matched
        $answer = "I'm sorry, I don't have an answer for that question. Please try asking a different question.";
    }

    $conn->close();

    echo $answer;
}
?>