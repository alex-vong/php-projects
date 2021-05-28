

<h1>Building a product list</h1>


<style>
	.project-list {
		list-style:  none; /* reset */
		margin:  0;
		padding:  0;
	}
	.project {
		background-color:  #eee;
		color:  #444;
		padding: 10px;
	}
	.project.dark {
		background-color: #333;
		color: #efefef;
	}
</style>


<?php
	function createProject($title, $teaser, $image, $dark) {
		$project = [
			"title" => $title,
			"teaser" => $teaser,
			"image" => $image,
			"dark" => $dark,
		];
		return $project;
	}
?>


<?php function renderProject($project) { ?>

	<?php if ($project["dark"]) { $theme = "dark"; } // writte on one line ?>

	<li class='project <?=$theme?>'>
		<h2 class='title'><?=$project["title"]?></h2>
		<p><?=$project["teaser"]?></p>
	</li>
<?php } ?>


<?php
	// creating the projects (could be done with a form)
	$one = createProject('SVG thting', "It moves!", "flower.jpg", false);
	$two = createProject('Simple readable article', "It's easy'", "article.jpg", true);
	$three = createProject('Complex article', "See here", "article-2.jpg", false);

	// putting them into an array
	$projects = [$one, $two]; // just literally creating an array and adding the projects by hand
	array_push($projects, $three); // "pushing" an item into the array (to the end of the list)
	// now there is three in there...

	echo "<ol class='project-list'>";
	// for each project... render the project
	foreach ($projects as $project) {
		// echo $project["title"]; echo "<br>";
		echo renderProject($project);
	}
	echo "</ol>";
?>










<style>
	article {
		border: 1px solid red;
		padding: 10px;
	}

	article h1 {
		font-family: sans-serif;
		font-size:  30px;
	}

	article h2 {
		font-family: sans-serif;
		font-size:  22px;
	}

	article section + section {
		margin-top:  40px;
	}
</style>


<?php 

$sectionOne = [
	"heading" => "Welcome to the doll house",
	"paragraphs" => [
		"Paragraph one...",
		"Paragraph 2.",
	],
];

$sectionTwo = [
	"heading" => "Welcome section two",
	"paragraphs" => [
		"Paragraph one...",
		"Paragraph 2.",
	],
];

$sections = [$sectionOne, $sectionTwo];


echo "<article>";

echo "<h1>Building an article</h1>";

foreach ($sections as $section) {

	echo "<section>";

	echo "<h2>" . $section["heading"] . "</h2>";

	// LOOP INSIDE A LOOP???  WHAT!!!
	foreach ($section["paragraphs"] as $paragraph) {
		echo "<p>" . $paragraph . "</p>";
	}

	echo "</section>";
}

echo "</article";

?>







