<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Mediacje Piła - status wiadomości</title>
    </head>
    <body>
        <main>
            <?php
                if(isset($_POST['submit'])) {
                    $to = "joanna.dorna@mediacje.pila.pl";
                    $from = $_POST['mail'];
                    $first_name = $_POST['name'];
                    $telephone = $_POST['telephone'];
                    $subject = "Kontakt z formularza";
                    $subject2 = "Kontakt z formularza mediacje.pila.pl";

                    $message = "Od: " . $from . "\nImię: " . $first_name . "\ntelefon: " . $telephone . "\nWiadomość: " . "\n\n" . $_POST['message'];
                    $message2 = "Dziękuję za kontakt, odezwę się niebawem. \nKopia wiadomości: " . $first_name . "\n\n" . $_POST['message'];

                    $headers = "Content-type: text/html; charset=utf-8r\n";
                    $headers .= "Content-Transfer-Encodin: 8bitr\n";

                    $headers2 = $headers . "From:" . $to;
                    $headers .= "From:" . $from;

                    if(mail($to,$subject,$message,$headers) and mail($from,$subject2,$message2,$headers2)) {
                        echo "<h1 class="success">Sukces</h1>"
                        echo "<p>Wiadomość wysłana pomyślnie. Dziękuję " . $first_name . ", odezwę się niebawem.</p>";
                    } else {
                        echo "<h1 class="failure">Coś poszło nie tak</h1>"
                        echo "<p>Wiadomość nie została wysłana, proszę spróbować jeszcze raz</p>"
                    }
                }
            ?>
        </main>
    </body>
</html>


