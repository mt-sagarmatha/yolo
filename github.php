<?php `git pull origin master`;
	`mkdir fuck`;
        $dir = shell_exec (" mkdir fuck2");
	$pull = shell_exec (" git -v pull origin master");
	$pull2 = `git pull 2>&1`
	$date = date("D M j G:i:s T Y");
	echo "hello\n";
	echo $date;
	echo (getcwd());
	$File = "YourFile.txt";
	$Handle = fopen($File, 'w');
	$Data = "Jane Doe helllo it finally works\n" . $date . "\n mk dir fuck2: ".$dir . "\npull " .$pull "\npull2" . $pull2;
	fwrite($Handle, $Data);
	`git pull origin master`;
	`git commit -am 'fucker'`;
	`git pull`;
