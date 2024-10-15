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
	<h3>Welcome to the Software Developers Management System. Input your details here to register</h3>
	<form action="handleforms.php" method="POST">
		<p><label for="fname">First Name</label> <input type="text" name="fname"></p>
		<p><label for="lname">Last Name</label> <input type="text" name="lname"></p>
		<p><label for="position">Position</label> <input type="text" name="position"></p>
		<p><label for="fav_proglanguage">Favorite Programming Language</label> <input type="text" name="fav_proglanguage"></p>
		<p><label for="age">Age</label> <input type="text" name="age"></p>
		<p><label for="technicalknowledge_rate">Technical Knowldge Rating</label> <input type="text" name="technicalknowledge_rate"></p>
		<p><label for="collaborationskill_rate">Collaboration Skills Rating</label> <input type="text" name="collaborationskill_rate"></p>
        <p><label for="codequality_rate">Code Quality Rating</label> <input type="text" name="codequality_rate">
			<input type="submit" name="insertNewSofdevRecords">
		</p>
	</form>
    <a href ="testGetVariable.php?softdevName=CharlesDavid"> Test Get SuperGlobal</a>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>SoftDev ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Position</th>
	    <th>Favorite Programming Language</th>
	    <th>Age</th>
	    <th>Technical Knowledge</th>
	    <th>Collaboration Skills</th>
	    <th>Code Quality</th>
	  </tr>

	  <?php $seeAllSoftdevRecords = seeAllSoftdevRecords($pdo); ?>
	  <?php foreach ($seeAllSoftdevRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['sd_ID']; ?></td>
	  	<td><?php echo $row['fname']; ?></td>
	  	<td><?php echo $row['lname']; ?></td>
	  	<td><?php echo $row['position']; ?></td>
	  	<td><?php echo $row['fav_proglanguage']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
	  	<td><?php echo $row['technicalknowledge_rate']; ?></td>
	  	<td><?php echo $row['collaborationskill_rate']; ?></td>
        <td><?php echo $row['codequality_rate']; ?></td>
	  	<td>
	  		<a href="editSoftdev.php?sd_ID=<?php echo $row['sd_ID'];?>">Edit</a>
	  		<a href="deleteSoftdev.php?sd_ID=<?php echo $row['sd_ID'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>