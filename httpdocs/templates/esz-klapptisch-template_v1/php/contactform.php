<?php
/*aktuell nicht gebraucht*/
$title = utf8_decode($_POST['title']);
$firstname = utf8_decode($_POST['firstname']);
$name = utf8_decode($_POST['name']);
$address = utf8_decode($_POST['address']);
$city = utf8_decode($_POST['city']);
$phone = utf8_decode($_POST['phone']);
$email = utf8_decode($_POST['email']);
$message = utf8_decode($_POST['message']);

$EmailTo = "b.emmenegger@ajato.ch";
$Subject = "Neue Anfrage auf klapptisch.ch";

$notempty = "true";

if ($title === '') {
    $notempty = "false";
    echo $notempty;
}
if ($firstname === '') {
    $notempty = "false";
    echo $notempty;
}
if ($name === '') {
    $notempty = "false";
    echo $notempty;
}
if ($address === '') {
    $notempty = "false";
    echo $notempty;
}
if ($city === '') {
    $notempty = "false";
    echo $notempty;
}
if ($phone === '') {
    $notempty = "false";
    echo $notempty;
}
if ($email === '') {
    $notempty = "false";
    echo $notempty;
}
if ($message === '') {
    $notempty = "false";
    echo $notempty;
}


 if ($notempty === "true"){
$Body .= "<html><head><style>h1, h1 a{color:#4f3d22 !important;} h2{color:#c18010;margin:15px 0px 10px 0px;} p{margin:5px 0px 5px 0px;}</style></head><body>";

$Body .= "<h1>Anfrage via <i>toblers-schweiz.ch</i></h1>";
$Body .= "<h2>Absender</h2>";
// prepare email body text
$Body .= "<p><b>Name: </b><br />";
$Body .= $title;
$Body .= "<br />";
$Body .= $firstname;
$Body .= " ";
$Body .= $name;
$Body .= "</p>";

$Body .= "<p><b>Adresse: </b><br />";
$Body .= $address;
$Body .= "<br />";
$Body .= $city;
$Body .= "</p>";

$Body .= "<p><b>Telefonnummer: </b>";
$Body .= $phone;
$Body .= "<br />";
$Body .= "<b>E-Mail: </b>";
$Body .= $email;
$Body .= "</p>";
 
$Body .= "<h2>Nachricht</h2><p>";
$Body .= $message;
$Body .= "</p>";

$Body .= "</body></html>";
     
$mail_header = "MIME-Version: 1.0\r\n";
$mail_header .= "Content-type: text/html; charset=iso-8859-1\r\n";
// Mailheader UTF-8 fähig machen
$mail_header .= 'From:' . $email;
// $mail_header .= 'Content-type: text/plain; charset=UTF-8' . "rn";
 
// send email
$success = mail($EmailTo, $Subject, $Body, $mail_header);

     
// redirect to success page
if ($success){
   echo "true";
} else {
    echo "false";
}
}


?>