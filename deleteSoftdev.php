<?php require_once 'dbconfig.php'; ?>
<?php require_once 'models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getSoftdevsByID = getSoftdevsByID($pdo, $_GET['sd_ID']); ?>
	<form action="handleforms.php?sd_ID=<?php echo $_GET['sd_ID']; ?>" method="POST">

		<div class="softdecContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getSoftdevsByID['fname']; ?></p>
			<p>Last Name: <?php echo $getSoftdevsByID['lname']; ?></p>
			<p>Position: <?php echo $getSoftdevsByID['position']; ?></p>
			<p>Favorite Programming Language: <?php echo $getSoftdevsByID['fav_proglanguage']; ?></p>
			<p>Age: <?php echo $getSoftdevsByID['age']; ?></p>
			<p>Technical Knowledge Rating: <?php echo $getSoftdevsByID['technicalknowledge_rate']; ?></p>
			<p>Collaboration Skills Rating: <?php echo $getSoftdevsByID['collaborationskill_rate']; ?></p>
            <p>Code Quality Rating: <?php echo $getSoftdevsByID['codequality_rate']; ?></p>
			<input type="submit" name="deleteSoftdevBtn" value="Delete">
		</div>
	</form>
</body>
</html>