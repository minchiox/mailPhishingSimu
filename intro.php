<?php
require "config.php";
include "authsession.php";


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            @apply font-sans bg-gray-100;
        }

        h1 {
            @apply text-4xl font-bold text-blue-700 mt-8 mb-4;
        }

        h2 {
            @apply text-2xl font-semibold text-blue-600;
        }

        p {
            @apply text-gray-800 leading-6 my-4;
        }

        strong {
            @apply font-semibold text-blue-700;
        }
    </style>
</head>
<body>
<div class="max-w-5xl mx-auto bg-gray-100 p-12 mt-8 pt-2">
<h1 class="text-center mt-8 font-size-7 font-sans font-bold text-blue-800">Difesa contro il Phishing</h1>
<h2 class="text-center font-bold text-blue-800">Simulazione DEMO</h2>
<p>Il Phishing può avere migliaia di sfaccettature e, per questo motivo, non è facile riassumere tutto in pochi punti. In linea generale ecco alcuni consigli per evitare di cadere nella trappola del Phishing:</p>
<p><strong class="font-semibold text-blue-800">Tieniti informato sulle ultime tecniche di Phishing;</strong> leggi magazine e portali del settore per conoscere quali sono le ultime novità in fatto di frode informatica.</p>
<p><strong class="font-semibold text-blue-800">Aggiorna sempre il parco software</strong> o quantomeno applica tutte le patch di sicurezza disponibili per il tuo Sistema Operativo</p>
<p><strong class="font-semibold text-blue-800">Usa browser aggiornati e di nuova generazione; </strong>soprattutto i più blasonati (Chrome, Firefox, Edge, Safari, Opera) integrano estensioni in grado di verificare l'affidabilità di un dominio attraverso blacklist o semplici algoritmi di riconoscimento anti-phishing</p>
<p><strong class="font-semibold text-blue-800">Occhio a chi ti scrive!</strong> Se ricevi una mail, un SMS o un messaggio da persone che non conosci, cerca sul Web il loro indirizzo o numero telefonico. Difficilmente riceverai email da indirizzi email legittimi (a meno che questi non siano stati violati); in ogni caso, usa le dovute precauzioni quando sei invitato al "call-to-action" urgente.</p>
<p><strong class="font-semibold text-blue-800">Fai attenzione al dominio!</strong> Non diamo per scontato che il sito stesso possa venir bucato ma è molto, molto difficile che questo succeda. È più probabile invece che la pagina fake sia hostata su un altro sito. Mi raccomando, il famoso "lucchetto verde", per essere affidabile, deve contenere l'intestatario del certificato. Se vuoi verificarlo, assicurati che il certificato SSL/TLS sia di legittima proprietà di chi fornisce il servizio web. Ormai creare un certificato gratuito è molto più semplice che in passato.</p><br>
    <a href="inbox.php" class=" inline-block max-w-xs flex mx-auto items-center justify-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
        Continua con la simulazione
    </a>

</div>
</body>
</html>