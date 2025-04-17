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

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Fetch user from the database
    $sql = "SELECT user_id, username, password FROM students WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            // Verify the password
            if (password_verify($password, $row['password'])) {
                // Start session and store user information
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];

                // Redirect to home page or dashboard
                header("Location: index.html"); // Change 'index.php' to your home or dashboard page
                exit();
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Class platform</title>
</head>
<body>
<!-- Login Form -->
<section id="login-form" class="form-01-main">
    <div class="form-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-sub-main">
                        <div class="_main_head_as">
                            <a href="#">
                                <img src="assets/images/vector.png" alt="Logo">
                            </a>
                        </div>

                        <form method="post" action="Userlogin.php">
                            <div class="form-group">
                                <input id="username" name="username" class="form-control _ge_de_ol" type="text" placeholder="Enter User Name" required="" aria-required="true">
                            </div>

                            <div class="form-group">                                              
                                <input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
                                <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                            </div>

                            <div class="form-group"></div>

                            <div class="form-group">
                                <div class="btn_uy" style="display: contents; justify-content: space-between; align-items: center;">
                                    <button type="submit" style=" padding: 5px 20px; font-family: cursive;"><span>Login Student</span></button>
                                </div>
                            </div>
                        </form>
     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
