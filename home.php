<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300">
<link href="stylesheet1.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<title>News Website Home</title>
</head>

<body>

<?php
    include('templatesNews/header.php');   //This includes the header.
?>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


	<div class="container">
		
		<div class="search_wrap search_wrap_4">
			<div class="search_box">
				<div class="btn btn_common">
					<i class="fas fa-search"></i>
				</div>
				<input type="text" class="input" placeholder="search...">
			</div>
		</div>
		
	</div>


		<div class="slider">
		
			<div class="sliderchild">
				<div class="imagecon">
				<a href="https://www.nst.com.my/world">Global News</a>
				</div>
				<div class="imagecon">
				<a href="https://www.techradar.com/sg">Tech News</a>
				</div>
				<div class="imagecon">
				<a href="https://www.espn.com/">Sports News</a>
				</div>
				<div class="imagecon">
				<a href="https://www.forbes.com/">Business News</a>
				</div>
			</div>
		
		</div>

</body>
</html>
