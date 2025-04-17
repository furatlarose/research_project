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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute SQL query
    $sql = "INSERT INTO students (username, password, email) VALUES ('$username', '$hashedPassword', '$email')";
    if (mysqli_query($conn, $sql)) {
       echo "<script>alert('Student Registered successful!');</script>";
    } else {
         echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
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

                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                            <div class="form-group">
                                <input id="username" name="username" class="form-control _ge_de_ol" type="text" placeholder="Enter User Name" required="" aria-required="true">
                            </div>
							
							  <div style="text-align: left; margin-bottom: -20px;" id="password-strength"></div>
                            <div class="form-group" style="margin-bottom: -20px;">                                              
							  <input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
							</div>						  
							

							 <div class="form-group">                                              
                                <input id="email" type="email" class="form-control" name="email" placeholder="Enter Email" required="required">
                            </div>

                            <div class="form-group"></div>

                            <div class="form-group">
                                <div class="btn_uy" style="display: contents; justify-content: space-between; align-items: center;">
                                    <button type="submit" style=" padding: 5px 20px; font-family: cursive;"><span>Register New Student</span></button>
                                </div>
                            </div>
                        </form>
     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add this inside the <head> tag of your HTML -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('password').addEventListener('input', function () {
      checkPasswordStrength(this.value);
    });
  });

  function checkPasswordStrength(password) {
    var passwordStrength = document.getElementById('password-strength');
    var strength = 0;

    // Check the length of the password
    if (password.length >= 8) {
      strength += 1;
    }

    // Check for numbers in the password
    if (/\d/.test(password)) {
      strength += 1;
    }

    // Check for lowercase and uppercase letters in the password
    if (/[a-z]/.test(password) && /[A-Z]/.test(password)) {
      strength += 1;
    }

    // Check for special characters in the password
    if (/[\W_]/.test(password)) {
      strength += 1;
    }

    // Update the password strength indicator
    switch (strength) {
      case 0:
      case 1:
        passwordStrength.innerHTML = 'Weak';
        passwordStrength.style.color = 'red';
        break;
      case 2:
        passwordStrength.innerHTML = 'Moderate';
        passwordStrength.style.color = 'orange';
        break;
      case 3:
        passwordStrength.innerHTML = 'Strong';
        passwordStrength.style.color = 'green';
        break;
      case 4:
        passwordStrength.innerHTML = 'Very Strong';
        passwordStrength.style.color = 'darkgreen';
        break;
      default:
        break;
    }
  }
</script>


</body>
</html>
