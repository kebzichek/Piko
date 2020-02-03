<?php 
$_POST = json_decode(file_get_contents("php://input"),true);

if (isset($_POST["type"]) && $_POST["type"] == "Contact"){
    send_mail($_POST["email"], $_POST["name"], $_POST["phone"], $_POST["message"]);
}

function send_mail($from, $name, $phone, $message){
    $message_formated = "Nová zpráva z webu Pikosro.cz! <br><br> Jméno: ".$name.",<br> Email: ".$from.",<br> Telefon: ".$phone.",<br> Zpráva: <br>";
    $message_formated .= $message;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    mail("dominio@tvorbamap.cz", "Kontaktní formulář | Piko ", $message_formated, $headers);
    echo "ok";
}
?>