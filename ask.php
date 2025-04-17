<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Class platform</title>
</head>
<style>
    .header {
        background-color: #343a40;
        color: #ffffff;
        padding: 20px 0;
        text-align: center;
    }

    .myButton {
      background-color: #4CAF50; 
      border: none;
      color: white; 
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 10px; 
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        min-height: 100%;
    }

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

    .container {
        text-align: center;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    button#startDictation {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        background-color: lightgray;;
        border: none;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(40, 167, 69, 0.1);
        transition: background-color 0.3s;
        font-family: cursive;
    }

    button#startDictation:hover {
        background-color: lightgray;;
    }

    #final_span {
        margin-top: 20px;
        font-size: 18px;
        color: #495057;
        width: 450px;
        height: 154px;
    }

    footer {
        background-color: #343a40;
        color: #ffffff;
        padding: 20px;
        text-align: center;
        margin-top: 20px;
    }

    footer a {
        color: #ffffff;
        text-decoration: none;
        margin: 0 10px;
        transition: color 0.3s;
    }

    footer a:hover {
        text-decoration: underline;
        color: #28a745;
    }

    .white-filter {
        filter: grayscale(100%) brightness(1000%);
    }
</style>
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
                    <a class="nav-link" href="table.php">Students List<span class="sr-only">(current)</span></a>
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
                        <a class="dropdown-item" href="ai.html">Text to Voice </a>
                    </div>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <body style="overflow-x: hidden;">
        <div class="container" style="min-height: 390px; margin-top: 80px;">
            <h1 style="font-family: cursive;margin-bottom: 20px;">Ask AI</h1>

            <div>
                <label for="question" style="font-family: cursive; font-size:15px;">Ask a question:</label>
            <input type="text" id="question" value="" style="font-family: cursive; font-size: 15px; width: 300px;">
            <button style="border: 1px solid #4CAF50;background-color: #4CAF50;border-radius: 13px;" onclick="answerQuestion()">Ask</button>
            </div><br><br><br>
			
			 <div id="answer"></div>

            <br><br><br><br>
            <div id="suggested-questions">
		<p style="font-family: cursive;">Suggested Questions:</p>
		<button class="myButton" onclick="populateQuestion('The code of this course?')">The code of this course?</button>
		<button class="myButton" onclick="populateQuestion('The Assignments of thes Course ?')">The Assignments of thes Course ?</button>
		<button class="myButton" onclick="populateQuestion('Course Lecturers ?')">Course Lecturers ?</button>
		<button class="myButton" onclick="populateQuestion('Markes of Quize ?')">Markes of Quize ?</button>
		<button class="myButton" onclick="populateQuestion('Markes of Project ?')">Markes of Project ?</button>
		<button class="myButton" onclick="populateQuestion('Markes of Mid Term?')">Markes of Mid Term?</button>
		<button class="myButton" onclick="populateQuestion('Markes of Finel Exam ?')">Markes of Finel Exam ?</button>
		<button class="myButton" onclick="populateQuestion('Degree of Pass?')">Degree of Pass?</button>
	</div>

        </div>
    </div>
    <script>
		function answerQuestion() {
			var question = document.getElementById('question').value.toLowerCase();
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "process_question.php", true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhr.onreadystatechange = function () {
				if (xhr.readyState == 4) {
					if (xhr.status == 200) {
						document.getElementById('answer').innerHTML = xhr.responseText;
					} else {
						console.error("Failed to process the request. Status: " + xhr.status);
					}
				}
			};
			xhr.send("question=" + encodeURIComponent(question));
		}


		function populateQuestion(question) {
			document.getElementById('question').value = question;
		}
	</script>


    <!-- Footer -->
    <footer>
        <p>&copy; 2023 Your Website. All rights reserved.</p>
        <p>Contact: <a href="mailto:info@example.com">info@example.com</a></p>
        <p>Follow us:
            <a href="https://twitter.com/your_twitter" target="_blank">Twitter</a>
            <a href="https://www.facebook.com/your_facebook" target="_blank">Facebook</a>
            <a href="https://www.linkedin.com/in/your_linkedin" target="_blank">LinkedIn</a>
        </p>
    </footer>

</body>
</html>
