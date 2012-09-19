<?php   //`git pull origin master`;
	//$pull = shell_exec (" git -v pull origin master");
	//$pull2 = `git pull 2>&1`;
	$who = `whoami 2>&1`;
	$date = date("D M j G:i:s T Y");
	echo "hello\n";
	echo $date;
	echo (getcwd());
	$File = "a.txt";
	$Handle = fopen($File, 'w');
	$Data = "Does lazy push finally work?\n" . $date; // . "\npull " .$pull .  "\npull2" . $pull2;
	fwrite($Handle, $Data);

