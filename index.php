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
		<section id="project-palette">
			<article id="project-options">
				<form>
				<h2>Poll Title <i class="icon-edit"></i></h2>
				
				<input class="display-none" type="text">
				
				<h3>Twitter Poll Question</h3>
				<textarea></textarea>
				
				<h3>Possible Answers</h3>
				<ul id="project-answers">
					<li>
						1. Poll Answer 
						<i class="float-right icon-edit icon-large"></i>
					</li>
					<li>
						2. Poll Answer
						<i class="float-right icon-edit icon-large"></i>
					</li>
				</ul>
				</form>
			</article>
			
			<article id="project-reporting">
				Reporting Output Here
			</article>
			<nav id="project-controls">
				<aside class="float-left">
					<em>Project Status:</em>
					<strong class="launched">Launched</strong>
				</aside>
				<button class="float-right" type="submit">Save</button>
			</nav>
	
		</section>	


		<script>
			
			$(document).onload(function(){
				
			});
			
		</script>

	</body>
	
</html>