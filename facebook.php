
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body><main class="flex h-full shadow-lg rounded-3xl">
    <section class="w-full px-4 flex flex-col bg-white rounded-r-3xl">
        <div class="flex justify-between items-center h-48 border-b-2 mb-8">
            <div class="flex space-x-2 items-center">
                <div class="h-12 w-12 rounded-full overflow-hidden">
                    <img src="https://clipart-library.com/images_k/facebook-logo-with-transparent-background/facebook-logo-with-transparent-background-2.jpg" loading="lazy" class="h-full w-full object-cover" />
                </div>
                <div class="flex flex-col">
                    <h3 class="font-semibold text-lg">Facebook</h3>
                    <p class="text-light text-gray-400">no-reply@accounts.facebook.com</p>
                </div>
            </div>
            <div>
                <ul class="flex text-gray-400 space-x-4">
                    <li class="w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                        </svg>
                    </li>
                    <li class="w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </li>

                    <li class="w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                        </svg>
                    </li>
                    <li class="w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </li>
                    <li class="w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
        <section>
            <h1 class="font-bold text-2xl">Avviso di sicurezza</h1>
            <article class="mt-1 text-gray-500 leading-7 tracking-wider">
                <p>Ciao Uccio</p>
                <?php

                function genera_testo_email()
                {
                // Incorpora il testo dinamico generato dalla funzione PHP
                 $saluti = ["Gentile Utente,", "Ciao,", "Salve,", "Caro Cliente,"];
                 $corpo_testuale = [
                "Siamo lieti di informarti che il tuo account è stato aggiornato con successo.",
                "Il tuo ordine è in fase di elaborazione e sarà spedito presto.",
                "Abbiamo riscontrato un'attività sospetta sul tuo account. Per favore, verifica le tue informazioni.",
                "Grazie per la tua recente transazione. Per ulteriori dettagli, consulta la tua cronologia degli acquisti.",
                "La tua sicurezza è la nostra priorità. Ti consigliamo di modificare la tua password regolarmente."
                ];
                $chiusure = ["Grazie per la tua attenzione.", "Cordiali saluti.", "Restiamo a tua disposizione.", "Per qualsiasi domanda, contattaci."];

                $testo_email = $saluti[array_rand($saluti)] . "\n\n" .
                $corpo_testuale[array_rand($corpo_testuale)] . "\n\n" .
                $chiusure[array_rand($chiusure)];

                 return $testo_email;
                }

                // Esempio di utilizzo
                $email_generata = genera_testo_email();
                echo nl2br($email_generata); // La funzione nl2br serve per mantenere la formattazione a capo nella visualizzazione HTML
                //echo nl2br(genera_testo_email());
                ?>
                <footer class="mt-1">
                    <p>Il team di Facebook</p>
                </footer>
            </article>
            <ul class="flex space-x-4 mt-12">
                <!-- segnala come spam, dovrebbe dare tipo un contentino all'utente che capisce se la mail è spam e la segnala -->
                <li
                        class="w-10 h-10 border rounded-lg p-1 cursor-pointer transition duration-200 text-indigo-600 hover:bg-blue-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                              d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                    </svg>
                </li>
            </ul>
        </section>
        <section class="mt-6 border rounded-xl bg-gray-50 mb-3">
            <textarea class="w-full bg-gray-50 p-2 rounded-xl" placeholder="Type your reply here..." rows="3"></textarea>
            <div class="flex items-center justify-between p-2">
                <button class="h-6 w-6 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                    </svg>
                </button>
                <button class="bg-purple-600 text-white px-6 py-2 rounded-xl">Reply</button>
            </div>
        </section>
    </section>
</main>
</body>
</html>