<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../assets/css/survey.css">
</head>
<body>
	They see me surveying and patrolling round

	<div id="form_contain">
  		<form action="survey/add_result" method="post">
			<input type="hidden" name="action" value="surveyInput"><br> 
			<input type="text" name="your_name" placeholder="Your Name"><br>

			<select name="location">
				<option>Mountain View</option>
				<option>Seattle</option>
			</select>
			<br>
			<select name="language">
				<option>Javascript</option>
				<option>PHP</option>
			</select>
			<br>
			<textarea name="comments" placeholder="I like turtles" id="" cols="30" rows="4"></textarea>
			<br>

			<input type="submit" name="submit1" value="Submit">
		</form>
	</div>

</body>
</html>