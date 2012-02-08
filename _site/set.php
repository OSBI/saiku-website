<?php
session_start();
function check_email_address($email) {
  // First, we check that there's one @ symbol, 
  // and that the lengths are right.
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    // Email invalid because wrong number of characters 
    // in one section or wrong number of @ symbols.
    return false;
  }
  // Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
    if
(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&
?'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
$local_array[$i])) {
      return false;
    }
  }
  // Check if domain is IP. If not, 
  // it should be valid domain name
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if
(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|
?([A-Za-z0-9]+))$",
$domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}
$_SESSION['FirstName'] = strip_tags($_POST['first_name']);
$_SESSION['LastName'] = strip_tags($_POST['last_name']);
$_SESSION['Email'] = strip_tags($_POST['email']);
$_SESSION['Company'] = strip_tags($_POST['company']);
$_SESSION['Country'] = strip_tags($_POST['country']);

if(!check_email_address($_SESSION['Email'])){
	$_SESSION['error']=1;
	header("location: downloads.php");
}else{
	
	if(!file_exists('data/file.csv')){
		$my_file = 'data/file.csv';
		$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	}
	
	$myFile = "data/file.csv";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$stringData = "$_SESSION[FirstName],$_SESSION[LastName],$_SESSION[Email],$_SESSION[Company],$_SESSION[Country]\n";
	fwrite($fh, $stringData);
	fclose($fh);
	
	setcookie("saiku_download", rand(),  time()+(60*60*24*365), "/");
	session_destroy();
	session_start();
	$_SESSION['success']=1;
	
	header("location: downloads.php");
	
}
?>
