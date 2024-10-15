<?php 
require_once 'dbconfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewSofdevRecords'])) {
	$fname = trim($_POST['fname']);
	$lname = trim($_POST['lname']);
	$position = trim($_POST['position']);
	$fav_proglanguage = trim($_POST['fav_proglanguage']);
	$age = trim($_POST['age']);
	$technicalknowledge_rate = trim($_POST['technicalknowledge_rate']);
	$collaborationskill_rate = trim($_POST['collaborationskill_rate']);
    $codequality_rate = trim($_POST['codequality_rate']);

	if (!empty($fname) && !empty($lname) && !empty($position) && !empty($fav_proglanguage) && !empty($age)  && !empty($technicalknowledge_rate)  && !empty($collaborationskill_rate) && !empty($codequality_rate)){
        $query = insertIntoSofdevRecords($pdo, $fname, $lname, $position, $fav_proglanguage, $age, $technicalknowledge_rate, $collaborationskill_rate,$codequality_rate);
        
        if ($query) {
            header("Location: index.php");
            exit();
        }
        
        else {
            echo "Insertion failed";
        }

        
    }

    else {
		echo "Make sure that no fields are empty";
	}
	
		
}
if (isset($_POST['editSoftdevs'])) {
	$sd_ID = $_GET['sd_ID'];
	$fname = trim($_POST['fname']);
	$lname = trim($_POST['lname']);
	$position = trim($_POST['position']);
	$fav_proglanguage = trim($_POST['fav_proglanguage']);
	$age = trim($_POST['age']);
	$technicalknowledge_rate = trim($_POST['technicalknowledge_rate']);
	$collaborationskill_rate = trim($_POST['collaborationskill_rate']);
    $codequality_rate = trim($_POST['codequality_rate']);

	if (!empty($sd_ID) && !empty($fname) && !empty($lname) && !empty($position) && !empty($fav_proglanguage) && !empty($age)  && !empty($technicalknowledge_rate)  && !empty($collaborationskill_rate) && !empty($codequality_rate)) {

		$query = updateASoftdev($pdo, $sd_ID, $fname, $lname, $position, $fav_proglanguage, $age, $technicalknowledge_rate, $collaborationskill_rate,$codequality_rate);

		if ($query) {
            header("Location: index.php");
            exit();
        }
        else {
            echo "Edit failed";
        }

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteSoftdevBtn'])) {

	$query = deleteASoftdev($pdo, $_GET['sd_ID']);

	if ($query) {
		header("Location: index.php");
        exit();
	}
	else {
		echo "Deletion failed";
	}
}




?>




