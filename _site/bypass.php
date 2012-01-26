<?php
setcookie("saiku_download", rand(),  time()+(60*60*24*365), "/");
header("location: downloads.php");
?>