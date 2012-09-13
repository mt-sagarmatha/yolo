<?php `git pull origin master`;
	`mkdir fu`;
	$date = date("D M j G:i:s T Y");
	echo "hello\n";
	echo $date;
	$File = "YourFile.txt";
	$Handle = fopen($File, 'w');
	$Data = "Jane Doe helllo it finally works\n" . $date;
	fwrite($Handle, $Data);
