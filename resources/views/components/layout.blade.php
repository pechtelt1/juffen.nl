<!doctype html>

<title>Juffen.nl - de plek voor jouw bestanden!</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.svg" alt="Juffen.nl Logo" width="135" height="16">
            </a>
        </div>

        <div class="mt-8 md:mt-0">
            <a href="/" class="text-xs font-bold uppercase">Home Page</a>

            <a href="/upload"
               class="bg-gradient-to-r from-green-500 via-blue-500 to-purple-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Upload jouw bestanden
            </a>
        </div>
    </nav>

    {{ $slot }}

    <footer class="text-center py-0.5 px-12 mt-16">
        <p class="mt-8 text-base leading-6 text-center text-gray-400">
            Made with <span class="text-red-500">♥</span> by <a href="https://www.juffen.nl"
                                                                class="text-indigo-600">Juffen.nl</a>
            <br>
            <br>
        </p>
    </footer>
</section>
</body>
