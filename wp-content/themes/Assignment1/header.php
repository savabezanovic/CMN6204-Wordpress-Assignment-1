<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php

function custome_title(){
	return get_bloginfo('name').' ~ '.get_bloginfo('description');
}?>
</title>
</head>
<body>
	<h1><?php echo custome_title() ?></h1>
	<nav id="main-menu">
		<ul>
			<li><a href="#">Page</a></li>
			<li><a href="#">Page</a></li>
			<li><a href="#">Page</a></li>
			<li><a href="#">Page</a></li>
		</ul>
	</nav>