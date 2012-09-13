<?php `git pull origin master`;
	$File = "YourFile.txt";
	$Handle = fopen($File, 'w');
	$Data = "Jane Doe\n";
	fwrite($Handle, $Data);
