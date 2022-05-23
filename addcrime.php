<?php
    $dateReported = $_POST['dateReported'];
	$timeReported = $_POST['timeReported'];
	$location = $_POST['location'];
	$reporterName = $_POST['reporterName'];
	$conn = new mysqli('localhost','root','','LMPSDB');
	if($conn ==false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
	else{
        if($stmt = $conn->prepare("INSERT INTO crimeInfo(dateReported, timeReported, location, reporterName) VALUES(?,?,?,?)")){
            $stmt->bind_param('ssss', $dateReported, $timeReported, $location, $reporterName);
            $stmt->execute();
			
		}else{
			echo 'could not add crime description';
		}
		$stmt->close();
		$conn->close();
    }

?>