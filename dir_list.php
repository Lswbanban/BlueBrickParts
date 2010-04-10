hello
<?php
//    header('Content-Type: text/plain');
	echo "AAA";
	$dir = "parts";
	$dh = opendir($dir);
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
youpi