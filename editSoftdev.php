<?php 
require_once 'dbConfig.php'; 
require_once 'models.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Software Developer Record</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php 
	// Ensure that 'sd_ID' exists in the GET array
	if (isset($_GET['sd_ID'])) {
		$getSoftdevsByID = getSoftdevsByID($pdo, $_GET['sd_ID']);
	} else {
		echo "Software developer ID not provided.";
		exit;
	}
	?>
	
	<form action="handleforms.php?sd_ID=<?php echo $_GET['sd_ID']; ?>" method="POST">
		<p>
			<label for="fname">First Name</label> 
			<input type="text" name="fname" value="<?php echo $getSoftdevsByID['fname']; ?>">
		</p>
		<p>
			<label for="lname">Last Name</label> 
			<input type="text" name="lname" value="<?php echo $getSoftdevsByID['lname']; ?>">
		</p>
		<p>
			<label for="position">Position</label>
			<input type="text" name="position" value="<?php echo $getSoftdevsByID['position']; ?>">
		</p>
		<p>
			<label for="fav_proglanguage">Favorite Programming language</label>
			<input type="text" name="fav_proglanguage" value="<?php echo $getSoftdevsByID['fav_proglanguage']; ?>">
		</p>
		<p>
			<label for="age">Age</label>
			<input type="text" name="age" value="<?php echo $getSoftdevsByID['age']; ?>">
		</p>
		<p>
			<label for="technicalknowledge_rate">Technical Knowledge</label>
			<input type="text" name="technicalknowledge_rate" value="<?php echo $getSoftdevsByID['technicalknowledge_rate']; ?>">
		</p>
		<p>
			<label for="collaborationskill_rate">Collaboration Skills</label>
			<input type="text" name="collaborationskill_rate" value="<?php echo $getSoftdevsByID['collaborationskill_rate']; ?>">
		</p>
		<p>
			<label for="codequality_rate">Code Quality</label>
			<input type="text" name="codequality_rate" value="<?php echo $getSoftdevsByID['codequality_rate']; ?>">
		</p>
		
		<!-- Pass the sd_ID as a hidden input -->
		<input type="hidden" name="sd_ID" value="<?php echo $_GET['sd_ID']; ?>">
		
		<input type="submit" name="editSoftdevs" value="Update Record">
	</form>
</body>
</html>
