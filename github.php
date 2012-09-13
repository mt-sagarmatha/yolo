<?php `git pull origin master`;
	$File = "YourFile.txt";
	$Handle = fopen($File, 'w');
	$Data = "Jane Doe helllo\n";
	fwrite($Handle, $Data);
