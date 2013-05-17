<?php
function db_connect()
{//localhost -uroot -proot
	$conn = mysql_connect('localhost:3306','root','root');
}




if(count($_POST) > 0)
{
	$title = addslashes($_POST['poll-title']);
	$question = addslashes($_POST['poll-question']);
	$status = in_array($_POST['poll-status'],array('Design','In Progress','Paused','Deleted')) ? $_POST['poll-status'] : 'Design';
	
	$conn = db_connect();
	mysql_select_db('twitpoll');
	
	$sql = "insert into Projects (sTitle,sQuestion,eStatus,dCreated,dModified) VALUES ('{$title}','{$question}','{$status}','".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."') ON DUPLICATE KEY UPDATE sTitle='{$title}', sQuestion='{$question}', eStatus = '{$status}', dModified='".date('Y-m-d H:i:s')."'";
	
	mysql_query($sql);
	
	header('location: /index.php');die;
}

?>