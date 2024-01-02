<?php
require "config.php";
include "authsession.php";
// Sample email data for demonstration

$nome = $_SESSION["nome"];

$emails = [
    ['id'=> 'distante', 'sender' => 'Domenico Distante', 'subject' => 'Avviso di sicurezza ', 'timestamp' => '23m ago','letta' => false],
    ['id'=> 'google','sender' => 'Google', 'subject' => 'Il tuo Account Google è stato recuperato correttamente', 'timestamp' => '23m ago','letta' => false],
    ['id'=> 'posteit','sender' => 'poste italiane', 'subject' => 'Avviso di sicurezza', 'timestamp' => '1h ago','letta' => false],
    ['id'=> 'amazon','sender' => 'Amazon', 'subject' => 'Attenzione: la tua autorizzazione di pagamento è stata sospesa', 'timestamp' => '1h ago','letta' => false],
    ['id'=> 'paypal','sender' => 'PayPal', 'subject' => 'Verifica dell\'Account Paypal', 'timestamp' => '5h ago','letta' => false],
    ['id'=> 'facebook','sender' => 'facebook', 'subject' => 'Avviso di sicurezza', 'timestamp' => '1h ago','letta' => false],
    ['id'=> 'esse3','sender' => 'Segreteria OnLine', 'subject' => 'Cambio Password', 'timestamp' => '15 nov 2023','letta' => false],
    ['id'=> 'spam','sender' => 'Formulários Google ', 'subject' => 'Secure Your Bitcoin Balance: Limited Time Left', 'timestamp' => '20 dic 2023','letta' => false],
];

$readEmailsCounter = count($emails);
// Converti l'array delle email in formato JSON
$emailData = json_encode($emails);

// Includi la variabile JavaScript nel codice PHP
echo "<script>var emails = " . $emailData . ";</script>";


function genera_testo_email()
{
    // Incorpora il testo dinamico generato dalla funzione PHP
    $corpo_testuale = [
        "Siamo lieti di informarti che il tuo account è stato aggiornato con successo.",
        "Il tuo ordine è in fase di elaborazione e sarà spedito presto.",
        "Abbiamo riscontrato un'attività sospetta sul tuo account. Per favore, verifica le tue informazioni.",
        "Grazie per la tua recente transazione. Per ulteriori dettagli, consulta la tua cronologia degli acquisti.",
        "La tua sicurezza è la nostra priorità. Ti consigliamo di modificare la tua password regolarmente."
    ];
    $chiusure = ["Grazie per la tua attenzione.", "Cordiali saluti.", "Restiamo a tua disposizione.", "Per qualsiasi domanda, contattaci."];

    $testo_email = $corpo_testuale[array_rand($corpo_testuale)] . "\n\n" .
        $chiusure[array_rand($chiusure)];

    return $testo_email;
}



?>


<html lang="it">
<head>
    <meta charset="utf-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        a:active {
            color: darkslateblue;
        }

        a[tabindex]:focus {
            color: darkslateblue;
            outline: none;
        }

        /* Aggiunto stile per la sezione delle email */
        #email-section {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        /* Aggiunto stile per nascondere la barra di scorrimento orizzontale */
        body {
            overflow-x: hidden;
        }

        /* Resto del tuo stile CSS rimane invariato */

        /* ... */

    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Mostra il disclaimer appena la pagina viene caricata
        document.addEventListener('DOMContentLoaded', function () {
            mostraDisclaimerIniziale();
        });

        function mostraDisclaimerIniziale() {
            Swal.fire({
                title: 'Disclaimer',
                html: '<p>Questo è un gioco serio (serious game) e l\'email sono simulate a scopo educativo e formativo.</p>' +
                    '<p>Se ritieni che queste email siano un tentativo di phishing, ti invitiamo a segnalarle cliccando sul pulsante "Segnala come spam".</p>' +
                    '<p>Se ritieni, invece, che queste email siano legittime e non rappresentino un tentativo di phishing, non segnalarle.</p>',
                icon: 'info',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        }
    </script>
    <script>
        function confermaLinkMalevolo() {
            Swal.fire({
                title: 'Attenzione!',
                text: 'Questo link è malevolo',
                icon: 'warning',
                confirmButtonColor: '#e53e3e',
                confirmButtonText: 'OK',
                showCancelButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false
            });
        }
    </script>
    <script type="text/javascript">

        var previousId = 'none';



        function toggle_visibility(sectionId) {
            var e = document.getElementById(sectionId);

            if (e.style.display == 'block') {
                e.style.display = 'none';

                // Ripristina il colore di sfondo dell'elemento cliccato
                var currentListItem = document.getElementById(sectionId + '-list-item');
                if (currentListItem) {
                    currentListItem.style.backgroundColor = '';
                }
            } else {
                if (previousId !== 'none') {
                    var ex = document.getElementById(previousId);
                    ex.style.display = 'none';

                    // Ripristina il colore di sfondo del precedente elemento cliccato
                    var previousListItem = document.getElementById(previousId + '-list-item');
                    if (previousListItem) {
                        previousListItem.style.backgroundColor = '';
                    }
                }

                e.style.display = 'block';
                previousId = sectionId;

                // Imposta il colore di sfondo dell'elemento cliccato su indigo
                var currentListItem = document.getElementById(sectionId + '-list-item');
                if (currentListItem) {
                    currentListItem.style.backgroundColor = 'rgb(224 231 255)'; // Codice colore indigo
                }
            }
        }
    </script>
    <!-- serious game: riconosci se phishing -->
    <script>
        var puntiUtente = 0;

        function gestisciClic() {
            var elementoCliccato = event.target;
            // Controlla se l'elemento è già stato cliccato
            if (elementoCliccato.classList.contains('cliccato')) {
                mostraAvvisoConferma("Hai già valutato questa mail come spam!");
                return;
            }

            // Disabilita l'elemento cliccato
            elementoCliccato.classList.add('cliccato');

            if (elementoCliccato.id === "uno") {
                // Se l'elemento cliccato ha id "uno", incrementa i punti
                puntiUtente++;
            } else if(elementoCliccato.id === "no") {
                // Altrimenti, decrementa i punti
                return;
            } else{
                puntiUtente--;
            }

            // Aggiorna il punteggio a schermo
            aggiornaPunteggioSchermo();

            // Puoi fare altre azioni qui in base al valore di puntiUtente
            // Ad esempio, mostrare un avviso di conferma
            mostraAvvisoConferma("Punteggio attuale: " + puntiUtente);
        }

        function mostraAvvisoConferma(testo) {
            Swal.fire({
                title: 'Attenzione!',
                text: testo,
                icon: 'warning',
                confirmButtonColor: '#e53e3e',
                confirmButtonText: 'OK',
                showCancelButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false
            });
        }

        function aggiornaPunteggioSchermo() {
            // Seleziona l'elemento HTML in cui visualizzare il punteggio
            var elementoPunteggio = document.getElementById('punteggio');

            // Aggiorna il testo dell'elemento con il nuovo punteggio
            elementoPunteggio.textContent = 'Punteggio: ' + puntiUtente;
        }
    </script>
    <script>
        var readEmailsCounter = <?php echo $readEmailsCounter; ?>;

        function segnaEmailLetta(emailId) {
            // Trova l'indice dell'email nell'array
            var index = emails.findIndex(function(email) {
                return email.id === emailId;
            });

            // Controlla se l'email è già stata letta
            if (index !== -1 && !emails[index]['letta']) {
                // Segna l'email come letta nell'array
                emails[index]['letta'] = true;

                // Aggiorna il contatore delle email lette
                readEmailsCounter--;

                // Debug
                console.log('Email segnata come letta. Nuovo contatore: ', readEmailsCounter);

                // Controlla se tutte le email sono state lette
                if (readEmailsCounter === 0) {
                    // Mostra il pulsante
                    mostraPulsantePaginaFinale();
                }
                aggiornaContatoreEmailsNonLette(readEmailsCounter);

            }
        }

        function mostraPulsantePaginaFinale() {
            // Crea un elemento pulsante
            var button = document.createElement("button");
            button.innerHTML = "Termina Simulazione";
            button.className = "bg-green-500 text-white font-bold py-2 px-4 rounded";

            button.onclick = function() {
                // Reindirizza a 'pagina.php' quando il pulsante viene cliccato
                window.location.href = 'intro.php';
            };

            // Aggiungi il pulsante alla sezione email
            var emailSection = document.getElementById("email-section");
            emailSection.appendChild(button);
        }

        function aggiornaContatoreEmailsNonLette(counter) {
            // Trova l'elemento del contatore nel tag <span>
            var contatoreSpan = document.getElementById("contatore-emails-non-lette");
            contatoreSpan.className = "absolute -top-2 -right-2 bg-red-600 px-2 h-6 w-6 items-center text-white rounded-full";

            // Aggiorna il testo del contatore
            contatoreSpan.textContent =counter;

            // Mostra il contatore se è diverso da zero, altrimenti nascondilo
            contatoreSpan.style.display = counter !== 0 ? "block" : "none";
        }
    </script>

    <script>window.onload = function() {window.frameElement.height = document.body.scrollHeight + 'px'};document.onload = function() {window.frameElement.height = document.body.scrollHeight + 'px'};</script>
</head>
<body>
<!-- in questo div c'è tutta la pagina -->
<div class="flex w-full h-full shadow-lg rounded-3xl">
    <!--sezione della nav bar-->
    <section> <!--class="flex flex-col w-1/12 bg-white rounded-l-3xl"-->
        <div class="w-32 mt-6 mb-14 p-4  rounded-2xl text-white"> <!--logo mail-->
            <img src="img/cropped-LOGO_DISTANTE_SRL_2020_NEW_-13.01.2020-1.png" />
        </div>
        <nav class="flex flex-col py-4 items-center">
            <a href="#" class="relative w-16 p-4 bg-purple-100 text-purple-900 rounded-2xl mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                </svg>
                <span id="contatore-emails-non-lette" class="absolute -top-2 -right-2 bg-red-600 h-6 w-6 p-2 flex justify-center items-center text-white rounded-full"><?php echo $readEmailsCounter; ?></span>

            </a>
            <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                          d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                </svg>
            </a>

            <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </a>
            <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                          d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                </svg>
            </a>
            <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl mb-24">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </a>
            <!-- bottone impostazioni -->
            <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl" onclick="toggle_visibility('settings');" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </a>
        </nav>
        <!-- Elemento HTML per visualizzare il punteggio -->
        <p id="punteggio" class="text-center text-xl">Punteggio: 0</p>
    </section>


    <section id="email-section" class="flex flex-col pt-3 w-4/12 bg-gray-50 h-full">
        <!-- INIZIO CASELLE EMAIL -->
        <!--<label class="px-3 ">
            <input class="rounded-lg p-4 bg-gray-100 transition duration-200 focus:outline-none focus:ring-2 w-full"
                   placeholder="Search..." />
        </label>-->
        <ul class="mt-1">
            <?php foreach ($emails as $index => $email): ?>
                <li id="<?php echo strtolower($email['id']);  ?>-list-item" class="py-5 border-b px-3 transition hover:bg-indigo-100">
                    <a href="#" onclick="toggle_visibility('<?php echo strtolower($email['id']); ?>'); segnaEmailLetta('<?php echo strtolower($email['id']); ?>')"  class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold"><?php echo $email['sender']; ?></h3>
                        <p class="text-md text-gray-400"><?php echo $email['timestamp']; ?></p>
                    </a>
                    <div class="text-md italic text-gray-400"><?php echo $email['subject']; ?></div>
                </li>
            <?php endforeach; ?>
        </ul>

    </section>
    <!-- email stage -->
    <section class="hidden" id="distante" style="width:6000px;">
        <?php require_once('distante.php'); ?>
    </section>
    <section class="hidden" id="google" style="width:6000px;">
        <?php require_once('google.html'); ?>
    </section>
    <section class="hidden" id="amazon" style="width:6000px;">
        <?php require_once('amazon.php'); ?>
    </section>
    <section class="hidden" id="facebook" style="width:6000px;">
        <?php require_once('facebook.php'); ?>
    </section>
    <section class="hidden" id="posteit" style="width:6000px;">
        <?php require_once('posteitaliane.php'); ?>
    </section>
    <section class="hidden" id="paypal" class="hidden" style="width:6000px;">
        <?php require_once('paypal.php'); ?>
    </section>
    <section class="hidden" id="settings" class="hidden" style="width: 6000px;">
        <?php require_once('settings.html'); ?>
    </section>
    <section class="hidden" id="esse3" style="width: 6000px;">
        <?php require_once('esse3.html'); ?>
    </section>
    <section class="hidden" id="spam" style="width: 6000px;">
        <?php require_once('spam.php'); ?>
    </section>
</div>

</body>
</html>