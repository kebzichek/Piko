<?php 
$_POST = json_decode(file_get_contents("php://input"),true);


if (isset($_POST["type"]) && $_POST["type"] == "email"){
    send_mail($_POST["email"], $_POST["name"], $_POST["phone"], $_POST["message"]);
}

function send_mail($from, $name, $phone, $message){
    if(preg_match("(r|n)", $from)){    
        die("Nespravny format email adresy!");
    }
    $message_formated = "Nová zpráva z webu! <br> Od: email: ".$from.",<br> telefon: ".$phone.",<br> Zpráva: <br>";
    $message_formated .= $message;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    mail("dominio@tvorbamap.cz", "Kontaktní formulář | Piko ", $message_formated, $headers);
}
?>