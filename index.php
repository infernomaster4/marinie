
<?php
//Header( "HTTP/1.1 301 Moved Permanently" );
//Header( "Location: https://freelancermasterdirecto.blogspot.com/");
//Header( "Location: https://www.google.com");
$domain = $_SERVER['HTTP_HOST'];
$newDomin ="https://".$domain."/ditroind/dengue-master";
Header( "Location: $newDomin");
//echo "https://".$domain;


?>
