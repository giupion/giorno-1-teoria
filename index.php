<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data dinamica in  Php - By Targetweb</title>
</head>

<body>

<h1>DATA E ORA IN PHP</h1>

<?php
#-This is the opening tag for a PHP script. It indicates the beginning of PHP code.
#- This line declares a variable named $data and assigns it the current date formatted as "day-month-year". The date() function is used to get the current date, and its format is specified as "d-m-y". The result is stored in the variable $data.
$data =(date("d-m-y"));
echo "Oggi è il $data buona giornata!";
#This line uses the echo statement to output a string. The string includes the Italian phrase "Oggi è il", followed by the value of the $data variable (which contains the current date), and then "buona giornata!" which translates to "good day!" in English.
#- This is the closing tag for the PHP script, indicating the end of the PHP code.
?> 


</body>

</html>