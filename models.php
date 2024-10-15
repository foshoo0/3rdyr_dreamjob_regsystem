<?php 

require_once 'dbconfig.php';

function insertIntoSofdevRecords($pdo, $fname, $lname, $position, $fav_proglanguage, $age, $technicalknowledge_rate, $collaborationskill_rate, $codequality_rate) {
    $sql = "INSERT INTO softdevs (fname, lname, position, fav_proglanguage, age, technicalknowledge_rate, collaborationskill_rate, codequality_rate) VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$fname, $lname, $position, $fav_proglanguage, $age, $technicalknowledge_rate, $collaborationskill_rate, $codequality_rate]);

    return $executeQuery ? true : false;  
}

function seeAllSoftdevRecords($pdo) {
    $sql = "SELECT * FROM softdevs";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute()) {
        return $stmt->fetchAll();
    } else {
        return [];  
    }
}

function getSoftdevsByID($pdo, $sd_ID) {
    $sql = "SELECT * FROM softdevs WHERE sd_ID = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$sd_ID])) {
        return $stmt->fetch();
    } else {
        return null;  
    }
}

function updateASoftdev($pdo, $sd_ID, $fname, $lname, $position, $fav_proglanguage, $age, $technicalknowledge_rate, $collaborationskill_rate, $codequality_rate) {
    $sql = "UPDATE softdevs 
                SET fname = ?, 
                    lname = ?, 
                    position = ?, 
                    fav_proglanguage = ?, 
                    age = ?, 
                    technicalknowledge_rate = ?, 
                    collaborationskill_rate = ?, 
                    codequality_rate = ?
            WHERE sd_ID = ?";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$fname, $lname, $position, $fav_proglanguage, $age, $technicalknowledge_rate, $collaborationskill_rate, $codequality_rate, $sd_ID]);

    return $executeQuery ? true : false;  
}

function deleteASoftdev($pdo, $sd_ID) {
    $sql = "DELETE FROM softdevs WHERE sd_ID = ?";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$sd_ID]);

    return $executeQuery ? true : false;  // Explicitly return false on failure
}
?>
