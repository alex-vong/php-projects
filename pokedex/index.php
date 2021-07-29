<!DOCTYPE html>

<?php 
	$page = null; //setting page to a value that does not exist yet

	if ( isset($_GET['page'])) { 
		$page = $_GET['page']; //if page is set then assign it value to $page
	} else {
		$page = 'home'; //if not set then default $page to 'home'
	}
?>
<html lang="en">

<!-- 
pages: home, kanto list, johto list, hoenn list -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pokedex: <?=$page?></title>
</head>


<body>
	<?php include 'site-menu.php' ?>

	<?php 
		if ($page === 'home') {
			include 'home.php';
		}
		if ($page == 'kanto') {
			include 'kanto.php';
		}
		if ($page == 'johto') {
			include 'johto.php';
		}
		if ($page == 'hoenn') {
			include 'hoenn.php';
		}


	 ?>
	
</body>
</html>