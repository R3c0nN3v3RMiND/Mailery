<Title>Fake Mailer</Title>
<meta charset="UTF-8">
<form action="<?php $_SERVER['SELF'] ?>" method="post"><br>





To: <input type="text" name="to"><br>
From: <input type="text" name="from"><br>
Subject: <input type="text" name="subject"><br>
Message:
<textarea name="message"></textarea><br>
<input type="submit" name="submit" value="Send"></form>



<?php
if (isset($_POST['submit'])) {
$to=$_POST['to'];
$from=$_POST['from'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$head="From: $from" .  "\r\n".
'Reply-To: '. $from .  "\r\n";
$her=$head.' < '.$from .' >';


$ret=mail($to, $subject, $message, $her);
if($ret==true){
echo "<br /> Mail sent Successfully";
}else{
echo "<br /> Unable to Send mail.";
}
}
?>