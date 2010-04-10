<HTML>
<HEAD>
<?php
    header('Content-Type: text/plain') ;
    $dir = opendir('parts') ;
    while ( ($entry = readdir($dir)) !== FALSE )
    {
        if ( is_file($entry) )
        {
            echo $entry, "\r\n" ;
        }
    }
    closedir($dp) ;
?>
</HEAD>
</HTML>