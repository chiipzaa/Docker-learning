<?php
 $link = mysqli_connect("mysql:3306", "chiippy_user", "chiippy_pass", "chiippy_db");
 if (!$link) {
     echo "Error: Unable to connect to MySQL." . PHP_EOL;
 }
 echo "Success: A connection to MySQL" . PHP_EOL;
 echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
 mysqli_close($link);
 
phpinfo();
?>