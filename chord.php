<html>
<head>
</head>
<body>
<?php

$comport = "/dev/ttyUSB2";
$fp = fopen($comport,"r");
$a = fread($fp,9600);
if($a == 1)
{
	echo " <audio autoplay>
	<source src=\"aminor.mp3\" type=\"audio/mpeg\">
</audio> " ;
header("Refresh:1");
}

else if($a == 2)
{
	echo " <audio autoplay>
	<source src=\"cmaj.mp3\" type=\"audio/mpeg\">
</audio> " ;
header("Refresh:1");
}

else if($a == 3)
{
	echo " <audio autoplay>
	<source src=\"fmaj.mp3\" type=\"audio/mpeg\">
</audio> " ;
header("Refresh:1");
}

else if($a == 4)
{
	echo " <audio autoplay>
	<source src=\"gmajor.mp3\" type=\"audio/mpeg\">
</audio> " ;
header("Refresh:1");
}



else
{
	echo "cant play";
	header("Refresh:1");
	
}

?>
</body>
</html>