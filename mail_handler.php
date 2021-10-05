<?php
if(isset($_POST['submit'])){
    $to = "joanna.dorna@mediacje.pila.pl"; // this is your Email address
    $from = $_POST['mail']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $subject = "Wiadomość z formularza";
    $subject2 = "Kopia wiadomości z formularza";
    $message = "Od:" . $from . " Imię: " . $first_name . " telefon: " . $telephone . " Wiadomość: " . "\n\n" . $_POST['message'];
    $message2 = "Dziękujemy za wiadomość, odezwiemy się niebawem. Kopia wiadomości: " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail wysłany. Dziękujemy " . $first_name . ", odezwiemy się niebawem.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>