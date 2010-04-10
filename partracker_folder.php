<HTML>
<HEAD>
<TITLE>BlueBrick - Part Tracker</TITLE>
<META NAME="generator" CONTENT="A la main par Alban NANTY">
<META NAME="keywords" CONTENT="BlueBrick, Alban NANTY, LEGO, Train Layout">
<META NAME="author" CONTENT="Alban NANTY">
<LINK REL=StyleSheet HREF="../stylesheet/default.css" TYPE="text/css" MEDIA=screen>
</HEAD>
<BODY CLASS="PartrackerFolder" LANG=en>

<CENTER>
Click on one Category
</CENTER>

<?php
$dir = "parts";

$dh = opendir($dir);

while (($file = readdir($dh)) !== false)
{
	echo "<UL CLASS=\"Partracker\" TYPE=\"square\">\n";
	if (is_dir($dir.'/'.$file) && $file != "." && $file != "..")
	{
		echo "<LI><A HREF=\"partracker_parts.php?folder=$file\" TARGET=\"ptparts\">$file</A></LI>\n";
	}
	echo "</UL>\n";
}

closedir($dh);
?>

</BODY>
</HTML>