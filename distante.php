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
                    <img src="img/cropped-LOGO_DISTANTE_SRL_2020_NEW_-13.01.2020-1.png" loading="lazy" class="h-full w-full object-cover" />
                </div>
                <div class="flex flex-col">
                    <h3 class="font-semibold text-lg">Distante Gaming</h3>
                    <p class="text-light text-gray-400">no-reply@accounts.distante.com</p>
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
                <p>Ciao <?php echo $nome; ?></p>
                <p> <?php $email_generata = genera_testo_email();
                    echo nl2br($email_generata); ?>
                </p>
                <footer class="mt-1">
                    <p>Grazie, Cordiali Saluti</p>
                    <p>Il team Distante Gaming</p>
                </footer>
            </article>
                <!-- segnala come spam, dovrebbe dare tipo un contentino all'utente che capisce se la mail è spam e la segnala -->

            <div class="flex justify-center pt-8"><button class=" bg-purple-600 text-white px-6 py-2 rounded-xl hover:bg-purple-900" id="zero" onclick="gestisciClic()">Segnala come mail di phishing</button></div>
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