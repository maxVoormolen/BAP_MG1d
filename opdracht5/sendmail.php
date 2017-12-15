<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht3</title>
</head>
<body>

<?php
$to = '24567@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'Form: ' . $_POST['Form'];

mail($to, $subject, $message, $headers);

echo 'Uw mail is verstuurd. Bedankt!';

?>
</body>
</html>