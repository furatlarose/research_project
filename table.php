<?php
include("config.php");

// Fetch data from the student_list table
$query = "SELECT first_name, last_name, student_id_number FROM student_list";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en" xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Class platform</title>
</head>
<body style="overflow-x: hidden;>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
-->

<style>
    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }
    .styled-table thead tr {
        background-color: darkgray;;
        color: #ffffff;
        text-align: left;
    }
    .styled-table th,
    .styled-table td {
        padding: 25px 70px;
    }
    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid darkgray;;
    }
    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
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
	
	.dropdown-item{
	font-family: cursive;
	padding: 0.6rem 1.5rem;
	
	}
	.dropdown-item:hover{
	font-family: cursive;
	background-color:hidden;
	color:green;
	padding: 0.6rem 1.5rem;
	}
</style>
<body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

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
                <a class="nav-link" href="table.php">Students List<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Chapters
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
<br><br><br><br>
<div class="row" style="justify-content: center; margin-top: 80px;">
    <table class="styled-table">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Student ID</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the result set and display each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
               echo "<td>{$row['first_name']} {$row['last_name']}</td>";
                echo "<td>{$row['student_id_number']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<br><br>
 <!-- Footer -->
     <footer>
    <p>&copy; 2023 Class Platform. All rights reserved</p>
    <p>Contact: <a href="mailto:info@example.com">info@example.com</a></p>
    
  </footer>
</body>
</html>
