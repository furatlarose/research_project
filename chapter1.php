<?php
include("config.php");



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM chapters WHERE LOWER(TRIM(name)) IN ('chapter1', 'chapter 1','Chapter 1','Chapter1', '1')";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error in the query: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $filePath = $row['file_path'];
} else {
    echo "No rows found!";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Class platform</title>

    <style>
        .dropdown-item {
            font-family: cursive;
            padding: 0.6rem 1.5rem;
        }

        .dropdown-item:hover {
            font-family: cursive;
            background-color: hidden;
            color: green;
            padding: 0.6rem 1.5rem;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top">
    <img src="Bulb-Learning-Transparent.png" Style="width:50px; height:50px; ">
    <a class="navbar-brand" href="#" style="font-size: 30px;font-family: cursive; padding-right: 100px;">Class platform</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                 <a class="nav-link" href="index.html">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="table.php">Students List</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Chapters <span class="sr-only">(current)</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="chapter1.php">Chapter 1</a>
                    <a class="dropdown-item" href="chapter2.html">Chapter 2</a>
                    <a class="dropdown-item" href="chapter3.html">Chapter 3</a>
                    <a class="dropdown-item" href="chapter4.html">Chapter 4</a>

                </div>
            </li>
			<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Assignments
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Quiz 1</a>
                    <a class="dropdown-item" href="#">Quiz 2</a>
                    <a class="dropdown-item" href="#">Quiz 3</a>
					  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Project</a>
					
                </div>
            </li>
           <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Artificial Intelligence
                </a>
                <div class="dropdown-menu">
				   <a class="dropdown-item" href="ask.php">Ask AI</a>
                    <a class="dropdown-item" href="ai4.html">Voice to Text</a>
                    <a class="dropdown-item" href="ai.html">Text to Voice  </a>
            </li>
			
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="row" style="margin-bottom: 20px; margin-top: 80px;">
    <body style="overflow-x: hidden;">

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Display the content using the retrieved file path -->
                    <iframe class="embed-responsive-item" src="<?php echo $filePath; ?>" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2023 Class Platform. All rights reserved.</p>
    <p>Contact: <a href="mailto:info@example.com">info@example.com</a></p>
</footer>

</body>
</html>
