<?php
function db_connect()
{//localhost -uroot -proot
	$conn = mysql_connect('localhost:3306','root','root');
}
$conn = db_connect();
mysql_select_db('twitpoll');
$sql = 'select * from Projects';
$rs = mysql_query($sql);

$projects = array();
while($data = mysql_fetch_assoc($rs))
{
	$projects[$data['iProjectID']] = $data;
}
?>

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
					<li>
						<a href="#" class="active">Poll Title</a>
					</li>		
					<?php foreach($projects as $project) {?>
						<li>
							<a href="#"><?php echo $project['sTitle'];?></a>
						</li>
					<?php } ?>
				</ul>
			</nav>
		</aside>
	<form action="/save_project.php" method="post">
		<section id="project-palette">
			<article id="project-options" class="active">

				<h2 class="js-PollTitle">
					<span>Poll Title</span>
					<i class="icon-edit"></i>
				</h2>
				<input type="text" class="js-TitleInput display-none" name="poll-title" value="Poll Title">
				
				
				<input class="display-none" type="text">
				
				<h3>Twitter Poll Question</h3>
				<textarea name="poll-question"></textarea>
				
				<h3>Possible Answers</h3>
				<ul id="project-answers">
					<li>
						1. Poll Answer <i class="float-right icon-edit icon-large"></i>
					</li>
					<li>
						2. Poll Answer <i class="float-right icon-edit icon-large"></i>
					</li>
				</ul>
				<button id="js-AddAnswer" type="button">+ Add Another</button>
				
			</article>
			
			<article id="project-reporting">
				Reporting Output Here
			</article>
			<nav id="project-controls">
				<aside class="float-left">
					<em>Project Status:</em>
					<strong class="launched">Launched</strong>
				</aside>
				<input class="float-right" type="submit">Save</button>
			</nav>
	
		</section>	
	</form>

		<script>
			
			$(document).ready(function(){
				
				$('#js-AddAnswer').on('click', function(){
				
					var i = $('#project-answers li').length + 1;
					
					$('#project-answers').append('<li>' + i + '. New Poll Answer  <i class="float-right icon-edit icon-large"></i></li>')
				})
				
				$('#project-palette article').on('click', function(){
					$('article').removeClass('active');
					$(this).addClass('active');
				})
				
				$('.js-PollTitle i').on('click', function(){
					$('.js-TitleInput').show();
					$(this).parent().hide();
					console.log('hello world');
				})
				
				$('.js-TitleInput').bind('keyup', function(e) {
					if(e.keyCode==13) {
						var titleVal = $('.js-TitleInput').val();
						var titleHead = $('.js-PollTitle span');
						e.preventDefault();
						console.log('titleHead');
						$(titleHead).html(titleVal);
						$('.js-TitleInput').hide();
						$('.js-PollTitle').show();
					}
					
				});
				
				
/*
				
				$('#add-project').click(function(){
					$('#project-palette').html('');
					$('#project-palette').load('/new.php');
					});
*/
				
				});
			
		</script>

	</body>
	
</html>