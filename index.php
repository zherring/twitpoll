<html>
	<head>
	<title>TwitPoll</title>
	<link href="/sass/css/style.css" media="all" rel="stylesheet" type="text/css">
	<link href="/sass/css/font-awesome.css" media="all" rel="stylesheet" type="text/css">
	<script src="/js/jquery.js"></script>

	</head>
	
	<body>
	
		<aside id="project_nav">
			<nav class="left">
	
				<a id="add-project" href="#"><i class="icon-plus-sign"></i> Create</a>
		
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
				<h2>Poll Title <i class="icon-edit"></i></h2>
				
				<input class="display-none" type="text">
				
				<h3>Twitter Poll Question</h3>
				<textarea></textarea>
				
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


		<script>
if (jQuery) {  
				console.log("Hey! Here!");

    // jQuery is not loaded  
} else {
				console.log("I got it! I got it! I got it! ...don't got it.");
    // jQuery is loaded
}		</script>

	</body>
	
</html>