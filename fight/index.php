<html>
<?php
	//--Connectie maken met de database
	$con = mysqli_connect('localhost','root','usbw','fighting_fantasy');
	include 'function.php';



   //hier worden de variabelen gedefineerd
	if(isset($_GET['id'])){
		$story = GetStory($con, $_GET['id']); //hier worden de ID's gevraag
		$content = CreateStoryPage($story); 
	}
	else{
		$content = CreateStartPage(); // verwijst naar de startpagina
	}
		
		$title = isset($_GET['id']) ? "Page " . $_GET['id'] : "Startpage";  //defineert de title die pagina nummer laat zien
		$isHomePage = !isset($story);
	
?>

<head>
	<link rel="stylesheet" href="stylerino.css" />
<title><?php echo $title; ?></title>
</head>

<body>
	<div class="lucht"></div>
	<div class="alles">
	<div class="header">
	<!-- Hier echo je dus de functie 'CreateStoryPage' die in 'function.php' aangemaakt word.-->
<?php echo $content; ?>
	</div>

	<div class="knopjes">
	<!-- Dit zijn de knoppen waar je op kan klikken, en dus een ID meegestuurd krijgt.-->
<?php
						if (!$isHomePage) {
							foreach ($story['options'] as $option) {
								if ($option == null) break;
								echo '<a href="?id=' . $option . '"class="levogel2" role="button">' . $option . '</a>';
							}
						}
						else{
							echo '<a href="index.php?id=1" class="levogel" role="button">Start die chizzle</a>';
						}
?>	

	</div>

</div>
</body>

</html>