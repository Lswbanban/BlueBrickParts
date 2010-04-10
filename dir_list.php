<?php
    header('Content-Type: text/plain');
	$dir = "./parts";
	$dh = opendir($dir);
	echo $dh;
	echo "---\r\n";
	while (($file = readdir($dh)) !== false)
	{
//		if (is_dir($dir.'/'.$file) && $file != "." && $file != "..")
		{
            echo $file."\r\n";
		}
	}   
    closedir($dh);
?>
