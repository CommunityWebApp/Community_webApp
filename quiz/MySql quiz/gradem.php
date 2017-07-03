<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="technologies.css" />

</head>

<body>

	<div id="page-wrap">

		<h1>Final Quiz for Lip building</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
	    $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
	    $answer11 = $_POST['question-11-answers'];
            $answer12 = $_POST['question-12-answers'];
            $answer13 = $_POST['question-13-answers'];
            $answer14 = $_POST['question-14-answers'];
            $answer15 = $_POST['question-15-answers'];
	    $answer16 = $_POST['question-16-answers'];
            $answer17 = $_POST['question-17-answers'];
            $answer18 = $_POST['question-18-answers'];
            $answer19 = $_POST['question-19-answers'];
            $answer20 = $_POST['question-20-answers'];
	    $answer21 = $_POST['question-21-answers'];
            $answer22 = $_POST['question-22-answers'];
            $answer23 = $_POST['question-23-answers'];
            $answer24 = $_POST['question-24-answers'];
            $answer25 = $_POST['question-25-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            if ($answer6 == "A") { $totalCorrect++; }
            if ($answer7 == "C") { $totalCorrect++; }
            if ($answer8 == "C") { $totalCorrect++; }
            if ($answer9 == "B") { $totalCorrect++; }
            if ($answer10 == "A") { $totalCorrect++; }
            if ($answer11 == "D") { $totalCorrect++; }
            if ($answer12 == "A") { $totalCorrect++; }
            if ($answer13 == "A") { $totalCorrect++; }
            if ($answer14 == "A") { $totalCorrect++; }
            if ($answer15 == "A") { $totalCorrect++; }
	    if ($answer16 == "D") { $totalCorrect++; }
            if ($answer17 == "C") { $totalCorrect++; }
            if ($answer18 == "D") { $totalCorrect++; }
            if ($answer19 == "A") { $totalCorrect++; }
            if ($answer20 == "C") { $totalCorrect++; }
	    if ($answer21 == "A") { $totalCorrect++; }
            if ($answer22 == "B") { $totalCorrect++; }
            if ($answer23 == "A") { $totalCorrect++; }
            if ($answer24 == "A") { $totalCorrect++; }
            if ($answer25 == "A") { $totalCorrect++; }
            echo "<div id='results'>$totalCorrect / 25 correct</div>";
            
        ?>
	
	</div>
		<a href="description.html">ANSWERS</a>
	
	
</body>

</html>
