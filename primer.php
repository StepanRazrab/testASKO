<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h3>testtttt_ASKO:</h3>
<div>
<?php

if(isset($_GET['del'])){
	$del = $_GET['del'];
	if($del == 1){
		$fd = fopen("my_log.txt", 'w') or die("�� ������� ������� ����");
		fclose($fd);
	}
}
	
	
if(isset($_GET['str'])){
	$a = $_GET['str'];
	$str_write = date("r") . "  |  " . $a . "\r\n";
		
	$fd = fopen("my_log.txt", 'a') or die("�� ������� ������� ����");
	fwrite($fd, $str_write);
	$visio = file_get_contents('my_log.txt');
		
	echo nl2br($visio);//HTML-��� ������� ������ ����� ������ ��������� ������

	fclose($fd);
}	
	

?>
</div>
</body>
</html>