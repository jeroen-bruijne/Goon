<?php

	function GetStory($con, $curpage = null)
	{
		$query = 'SELECT * FROM `location` WHERE `page` = '.$curpage;
		$result = $con->query($query);

		$row = mysqli_fetch_object($result);


		//--Haal de opties uit de database (de knoppen)
		$options = [
			$row->option1,
			$row->option2,
			$row->option3,
			$row->option4,
			$row->option5,
			$row->option6,	
		];

		$story['text'] = $row->text;
		$story['id'] = $curpage;
		$story['options'] = $options;

		return $story;
	}

	//--Maakt een functie aan voor alle tekst uit de database. Die je dus vervolgens in de index.php kunt laten 'echo-en'.
	function CreateStoryPage($story)
	{

		$result = "<h1>Page " . $story['id'] . "</h1>";
		$result .= "<p>" . $story['text'] . "</p>";
		return $result;
	}


	//de tekst op de startpagina (als er dus geen ID aanwezig is)
	function CreateStartPage()
	{
		return '<h1>Start Fighting Fantasy</h1>
		<p>veel pleziertjes toegewenst met deze game!</p>
		';
	}
?>