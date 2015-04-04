<?php
include 'topMenuImage.php';
function generateTopMenuNoLogin(){
	$servername = "localhost";
	$username = "livescore";
	$password = "livescore";
	$dbname = "livescore";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	
	
	
	
		$sql = "SELECT id, name, userRank, defaultRank FROM sports ORDER BY defaultRank asc";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			echo "<div id='topMenuItem'>
					<div id='topMenuImage'>";
						topMenuImage($row["name"]);
					echo "</div>
					<div id='topMenuText'>";
			echo $row["name"];
				echo '</div>';
			echo '</div>';
	}
	$conn->close();
}
?>