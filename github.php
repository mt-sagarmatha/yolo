<?php `git pull origin master`;
	$File = "YourFile.txt";
	$Handle = fopen($File, 'w');
	$Data = "Jane Doe helllo it finally works\n";
	fwrite($Handle, $Data);
