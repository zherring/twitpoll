<html>
	<head>
	<title>TwitPoll</title>
	<link href="/sass/css/style.css" media="all" rel="stylesheet" type="text/css">
	
	</head>
	
	<body>
	
	<aside id="project_nav">
		<nav class="left">

		<a id="add-project" href="#">+ Create New Poll</a>
	
		<ul id="project-list">			
			<?php for($i = 0; $i < 20; $i++) {?>
				<li>
					<a href="#">Existing Poll Name <?php echo $i; ?></a>
				</li>
			<?php } ?>
		</ul>


	</nav>
	</aside>
	<section id="project_palette">
		<article id="project-options">
			<form>
			<h2>Poll Title</h2>
			
			<input class="display-none" type="text">
			
			<h3>Twitter Poll Question</h3>
			<textarea>
				Description Here
			</textarea>
			
			<h3>Possible Answers</h3>
			<ul>
				<li>
					Poll Answer 2
				</li>
				<li>
					Poll Answer 2
				</li>
			</ul>
			</form>
		</article>
		
		<article id="project-reporting">
			Reporting Output Here
		</article>
		<nav id="project-controls">
			Test
		</nav>

	</section>	
	
</body>
</html>