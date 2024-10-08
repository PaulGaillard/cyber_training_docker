<?php

#echo "Hello, World from Docker! <br>";

$host = 'db';
$user = 'example';
$password = 'example';
$db = 'example';

$conn = new mysqli($host,$user,$password,$db);
if(!$conn) {echo "Erreur de connexion à MSSQL<br />";}
else{
        #echo "Connexion à MSSQL ok<br />";
	mysqli_close($conn);
}

Header( 'Cache-Control: no-cache, must-revalidate');
Header( 'Content-Type: text/html;charset=utf-8' );

?>
<!DOCTYPE html>

<html lang="en-GB">

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<title>TP de cybersécurityé</title>
	</head>

	<body>
		<h3>Liste des exercices disponibles :</h3>
		<div>
		<?php
			$files = scandir(".");
			$extension = ".php";
			$safe = "safe";
			foreach($files as $file) {
			    if($file != '.' && $file != '..' && strpos($file, $extension) !== false && strpos($file, $safe) == false && $file != "index.php") {
				    if(strpos($file, "xss_reflected") !== false){
				    	echo "<div><a href=\"" . HTMLSPECIALCHARS($file) . "?article_name=Mon superbe article\" target=\"_blank\">" . HTMLSPECIALCHARS($file) . "</a></div>";
				    } else if(strpos($file, "sql_injection") !== false){
				    	echo "<div><a href=\"" . HTMLSPECIALCHARS($file) . "?name=Jean\" target=\"_blank\">" . HTMLSPECIALCHARS($file) . "</a></div>";
				    } else {
				    	echo "<div><a href=\"" . HTMLSPECIALCHARS($file) . "\" target=\"_blank\">" . HTMLSPECIALCHARS($file) . "</a></div>";
				    }
				
			    }
			}
		?>
		</div>
</html>
