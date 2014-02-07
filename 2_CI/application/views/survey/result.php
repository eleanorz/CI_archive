<html>
<head>
	<title>results</title>
	<link rel="stylesheet" href="../assets/css/survey.css">

</head>
<body>

	<h3>Thanks for submitting,<br> you have submitted this form  
	<?php echo $this->session->userdata('total_visits'); ?>  times</h3>

	<div id = 'results'>
			Name: <?php echo $your_name; ?>
			<br>
			Dojo Location: <?php echo $location; ?>
			<br>
			Favorite Language: <?php echo $language; ?>
			<br>
			Comment: <?php echo $comments; ?>
	</div>

	<a href="/survey">go back</a>




	
	

</body>
</html>