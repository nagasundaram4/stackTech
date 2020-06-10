<?php
$to = "info@stacktech.sg";
$subject = $_POST["subject"];

$msg = $_POST["message"];
$name = $_POST["name"];
$email = $_POST["email"];
$message = "
<html>
<head>
<title>User Message From  </title>
</head>
<body>
<p><b>$subject</b></p>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Message</th>
</tr>
<tr>
<td>$name</td>
<td>$email</td>
<td>$msg</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@stacktech.sg>' . "\r\n";

mail($to,$subject,$message,$headers);
?>