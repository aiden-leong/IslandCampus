<?php
$username = $_POST["username"];
$password = $_POST["password"];
$url = "http://intranet.must.edu.mo/student/StudentPortal_1.htm";

$process = curl_init($url);
curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/xml', $additionalHeaders));
curl_setopt($process, CURLOPT_HEADER, 1);
curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($process, CURLOPT_TIMEOUT, 30);
curl_setopt($process, CURLOPT_POST, 1);
curl_setopt($process, CURLOPT_POSTFIELDS, $payloadName);
curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
$return = curl_exec($process);
$httpcode = curl_getinfo($process, CURLINFO_HTTP_CODE);
curl_close($process);
if($httpcode == '200')
{
  echo "true";
}
else {
  echo "false";
}

?>
