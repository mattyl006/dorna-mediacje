<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Mediacje Piła - status wiadomości</title>
    </head>
    <body>
        <?php
        if(isset($_POST['submit'])) {
            $to = "joanna.dorna@mediacje.pila.pl"; // this is your Email address
            $from = $_POST['mail']; // this is the sender's Email address
            $first_name = $_POST['name'];
            $telephone = $_POST['telephone'];
            $subject = "Wiadomość z formularza";
            $subject2 = "Kopia wiadomości z formularza";

            $message = "Od:" . $from . " Imię: " . $first_name . " telefon: " . $telephone . " Wiadomość: " . "\n\n" . $_POST['message'];
            $message2 = "Dziękujemy za wiadomość, odezwiemy się niebawem. Kopia wiadomości: " . $first_name . "\n\n" . $_POST['message'];

            $headers = "Content-type: text/html; charset=utf-8r\n";
            $headers .= "Content-Transfer-Encodin: 8bitr\n";

            $headers2 = $headers . "From:" . $to;
            $headers .= "From:" . $from;


            mail($to,$subject,$message,$headers);
            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
            echo "Mail wysłany. Dziękujemy " . $first_name . ", odezwiemy się niebawem.";
            // You can also use header('Location: thank_you.php'); to redirect to another page.
            // You cannot use header and echo together. It's one or the other.
            }
        ?>
    </body>
</html>


