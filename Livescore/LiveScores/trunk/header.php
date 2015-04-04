<?php
	include 'generateTopMenuNoLogin.php';
	echo "<html> 
			<head> 
		 		<title>Livescores</title> 
				<link rel='stylesheet' type='text/css' href='livescore.css'>
			</head>
			<body>
				<div id='wrapper'> 
					<div id='header'>
						<p>blablabla</p>
					</div>
					<div id='content-header'>;
					</div>";
					echo "<div id='topMenu'>";
						generateTopMenuNoLogin();
					echo "</div>";
						echo "<div id='content'>";
?>