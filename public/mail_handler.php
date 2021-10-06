<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Mediacje Piła - status wiadomości</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display&display=swap');

            body {
              display: flex;
              justify-content: center;
              align-items: center;
              min-height: 100vh;
              background-color: #F1F1F1;
            }

            main {
              max-width: 600px;
              max-height: 600px;
              box-shadow: 0 24px 40px rgba(26, 26, 26, 0.16);
              background-color: white;
              padding: 32px;
            }

            h1 {
                font-family: 'Open Sans', sans-serif;
                font-size: 20px;
                line-height: 24px;
                margin: 0 0 20px 0;
            }

            .success {
                color: #1C4614;
            }

            .failure {
                color: #BE2D2E;
            }

            p {
                font-size: 14px;
                line-height: 20px;
                margin: 0;
                color: #656565;
            }
        </style>
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
                        echo "<h1 class="success">Sukces</h1>";
                        echo "<p>Wiadomość wysłana pomyślnie. Dziękuję " . $first_name . ", odezwę się niebawem.</p>";
                    } else {
                        echo "<h1 class="failure">Coś poszło nie tak</h1>";
                        echo "<p>Wiadomość nie została wysłana, proszę spróbować jeszcze raz</p>";
                    }
                }
            ?>
        </main>
    </body>
</html>


