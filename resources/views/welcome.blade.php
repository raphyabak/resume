<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Abayomi Raphael</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>

<body>
    <section class="max-w-lg px-4 py-10 mx-auto space-y-1 font-mono text-center">
        <div href="#" class="relative block">
            <img alt="profil" src="{{ asset('raphy.jpg') }}" class="object-cover w-40 h-40 mx-auto rounded-3xl" />
        </div>
        <h3 class="max-w-3xl py-2 mx-auto text-4xl font-bold text-center text-gray-800 md:text-5xl dark:text-white">Hi,
            I&#x27;m Raphael 🤘</h3>
        <h2 class="max-w-2xl py-2 mx-auto text-2xl font-bold text-center text-gray-800 md:text-2xl dark:text-white">
            Backend Developer.</h2>
        <div class="flex justify-center pt-12 mx-auto">
            <a class="mx-2" href="https://wa.me/234806826556" aria-label="whatsapp">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" width="16" height="16" fill="green" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                  </svg>
            </a>
            <a class="mx-2" href="https://twitter.com/RaphWebb_Inc" aria-label="Twitter">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" width="2500" height="2031"
                    viewBox="-0.25 -0.25 1109.5 901.5" class="w-5 h-5" aria-hidden="true">
                    <path
                        d="M741 .2V0h52l19 3.8c12.667 2.467 24.167 5.7 34.5 9.7 10.334 4 20.334 8.667 30 14 9.667 5.333 18.434 10.767 26.301 16.3 7.8 5.467 14.8 11.267 21 17.4C929.933 67.4 939.5 69 952.5 66s27-7.167 42-12.5 29.834-11.333 44.5-18c14.667-6.667 23.601-10.9 26.801-12.7 3.133-1.866 4.8-2.866 5-3l.199-.3 1-.5 1-.5 1-.5 1-.5.2-.3.3-.2.301-.2.199-.3 1-.3 1-.2-.199 1.5-.301 1.5-.5 1.5-.5 1.5-.5 1-.5 1-.5 1.5c-.333 1-.666 2.333-1 4-.333 1.667-3.5 8.333-9.5 20S1051 73 1042 85s-17.066 21.066-24.199 27.2c-7.2 6.2-11.967 10.533-14.301 13-2.333 2.533-5.166 4.866-8.5 7l-5 3.3-1 .5-1 .5-.199.3-.301.2-.3.2-.2.3-1 .5-1 .5-.199.3-.301.2-.3.2-.2.3-.199.3-.301.2-.3.2-.2.3h5l28-6c18.667-4 36.5-8.833 53.5-14.5l27-9 3-1 1.5-.5 1-.5 1-.5 1-.5 1-.5 2-.3 2-.2v2l-.5.2-.5.3-.199.3-.301.2-.3.2-.2.3-.199.3-.301.2-.3.2-.2.3-.199.3-.301.2-.5 1-.5 1-.3.2c-.133.2-4.366 5.866-12.7 17-8.333 11.2-12.833 16.866-13.5 17-.666.2-1.6 1.2-2.8 3-1.133 1.866-8.2 9.3-21.2 22.3s-25.732 24.566-38.199 34.7c-12.533 10.2-18.867 22.733-19 37.6-.2 14.8-.967 31.534-2.301 50.2-1.333 18.667-3.833 38.833-7.5 60.5-3.666 21.667-9.333 46.167-17 73.5-7.666 27.333-17 54-28 80s-22.5 49.333-34.5 70-23 38.167-33 52.5-20.166 27.833-30.5 40.5c-10.333 12.667-23.399 26.934-39.199 42.8-15.867 15.8-24.533 24.467-26 26-1.533 1.467-8.066 6.934-19.601 16.4-11.466 9.533-23.8 19.066-37 28.6-13.133 9.467-25.2 17.367-36.2 23.7s-24.266 13.566-39.8 21.7C630.734 840.4 614 848 596 855s-37 13.5-57 19.5-39.333 10.667-58 14c-18.666 3.333-39.833 6.167-63.5 8.5l-35.5 3.5v.5h-65v-.5l-8.5-.5c-5.666-.333-10.333-.667-14-1-3.666-.333-17.5-2.167-41.5-5.5s-42.833-6.667-56.5-10c-13.666-3.333-34-9.667-61-19s-50.1-18.767-69.3-28.3c-19.133-9.467-31.133-15.467-36-18-4.8-2.467-10.2-5.533-16.2-9.2l-9-5.5-.199-.3-.301-.2-.3-.2-.2-.3-1-.5-1-.5-.199-.3-.301-.2-.3-.2-.2-.3-.199-.3L.5 800H0v-2l1 .2 1 .3 4.5.5c3 .333 11.167.833 24.5 1.5 13.334.667 27.5.667 42.5 0s30.334-2.167 46-4.5c15.667-2.333 34.167-6.333 55.5-12 21.334-5.667 40.934-12.4 58.801-20.2 17.8-7.866 30.466-13.733 38-17.6 7.466-3.8 18.866-10.867 34.199-21.2l23-15.5.2-.3.3-.2.301-.2.199-.3.2-.3.3-.2.301-.2.199-.3 1-.3 1-.2.2-1 .3-1 .301-.2.199-.3-8-.5c-5.333-.333-10.5-.667-15.5-1s-12.833-1.833-23.5-4.5c-10.666-2.667-22.166-6.667-34.5-12-12.333-5.333-24.333-11.667-36-19-11.666-7.333-20.1-13.434-25.3-18.3-5.133-4.801-11.8-11.6-20-20.4-8.133-8.866-15.2-17.967-21.2-27.3s-11.733-20.101-17.199-32.3L124.5 551l-.5-1.5-.5-1.5-.3-1-.2-1 1.5.2 1.5.3 11 1.5c7.334 1 18.834 1.333 34.5 1 15.667-.333 26.5-1 32.5-2s9.667-1.667 11-2l2-.5 2.5-.5 2.5-.5.2-.3.3-.2.301-.2.199-.3-2-.5-2-.5-2-.5-2-.5-2-.5c-1.333-.333-3.666-1-7-2-3.333-1-12.333-4.667-27-11-14.666-6.333-26.333-12.5-35-18.5a241.7 241.7 0 0 1-24.8-19.7c-7.8-7.2-16.366-16.467-25.7-27.8-9.333-11.333-17.666-24.5-25-39.5-7.333-15-12.833-29.333-16.5-43a232.143 232.143 0 0 1-7.199-41.5L43 316l1 .2 1 .3 1 .5 1 .5 1 .5 1 .5 15.5 7c10.334 4.667 23.167 8.667 38.5 12 15.334 3.333 24.5 5.167 27.5 5.5l4.5.5h9l-.199-.3-.301-.2-.3-.2-.2-.3-.199-.3-.301-.2-.3-.2-.2-.3-1-.5-1-.5-.199-.3-.301-.2-.3-.2-.2-.3-1-.5-1-.5-.199-.3c-.2-.134-3.067-2.267-8.601-6.4-5.467-4.2-11.2-9.633-17.2-16.3s-12-13.667-18-21A162.158 162.158 0 0 1 77 271c-4.666-8.333-9.6-18.934-14.8-31.8-5.133-12.8-9.033-25.7-11.7-38.7-2.666-13-4.166-25.833-4.5-38.5-.333-12.667 0-23.5 1-32.5s3-19.167 6-30.5 7.334-23.333 13-36l8.5-19 .5-1.5.5-1.5.301-.2.199-.3.2-.3.3-.2.301.2.199.3.2.3.3.2.301.2.199.3.2.3.3.2.5 1 .5 1 .301.2.199.3 13.5 15c9 10 19.667 21.167 32 33.5 12.334 12.333 19.167 18.733 20.5 19.2 1.334.533 3 2.066 5 4.6 2 2.467 8.667 8.367 20 17.7 11.334 9.333 26.167 20.167 44.5 32.5 18.334 12.333 38.667 24.5 61 36.5 22.334 12 46.334 22.833 72 32.5 25.667 9.667 43.667 16 54 19 10.334 3 28 6.833 53 11.5s43.834 7.667 56.5 9c12.667 1.333 21.334 2.1 26 2.3l7 .2-.199-1.5-.301-1.5-2-12.5c-1.333-8.333-2-20-2-35s1.167-28.833 3.5-41.5c2.334-12.667 5.834-25.5 10.5-38.5 4.667-13 9.234-23.434 13.7-31.3 4.534-7.8 10.467-16.7 17.8-26.7 7.334-10 16.834-20.333 28.5-31 11.667-10.667 25-20.167 40-28.5s28.834-14.667 41.5-19c12.667-4.333 23.334-7.167 32-8.5 8.667-1.333 13-2.1 13-2.3z"
                        fill="#5da8dc" stroke="#5da8dc" stroke-width=".5" />
                    <path
                        d="M0 399V0h741v.2c0 .2-4.333.966-13 2.3-8.666 1.333-19.333 4.167-32 8.5-12.666 4.333-26.5 10.667-41.5 19s-28.333 17.833-40 28.5c-11.666 10.667-21.166 21-28.5 31-7.333 10-13.266 18.9-17.8 26.7-4.466 7.866-9.033 18.3-13.7 31.3-4.666 13-8.166 25.833-10.5 38.5-2.333 12.667-3.5 26.5-3.5 41.5s.667 26.667 2 35l2 12.5.301 1.5.199 1.5-7-.2c-4.666-.2-13.333-.966-26-2.3-12.666-1.333-31.5-4.333-56.5-9s-42.666-8.5-53-11.5c-10.333-3-28.333-9.333-54-19-25.666-9.667-49.666-20.5-72-32.5-22.333-12-42.666-24.167-61-36.5-18.333-12.333-33.166-23.167-44.5-32.5-11.333-9.333-18-15.233-20-17.7-2-2.533-3.666-4.066-5-4.6-1.333-.467-8.166-6.867-20.5-19.2-12.333-12.333-23-23.5-32-33.5L80 44.5l-.199-.3-.301-.2-.5-1-.5-1-.3-.2-.2-.3-.199-.3-.301-.2-.3-.2-.2-.3-.199-.3-.301-.2-.3.2-.2.3-.199.3-.301.2-.5 1.5-.5 1.5L66 63c-5.666 12.667-10 24.667-13 36s-5 21.5-6 30.5-1.333 19.833-1 32.5c.334 12.667 1.834 25.5 4.5 38.5 2.667 13 6.567 25.9 11.7 38.7 5.2 12.866 10.134 23.466 14.8 31.8 4.667 8.333 10 16.167 16 23.5 6 7.333 12 14.333 18 21s11.733 12.1 17.2 16.3c5.533 4.134 8.4 6.267 8.601 6.4l.199.3 1 .5 1 .5.2.3.3.2.301.2.199.3 1 .5 1 .5.2.3.3.2.301.2.199.3.2.3.3.2.301.2.199.3h-9l-4.5-.5c-3-.333-12.166-2.167-27.5-5.5-15.333-3.333-28.166-7.333-38.5-12l-15.5-7-1-.5-1-.5-1-.5-1-.5-1-.3-1-.2 1.801 21c1.133 14 3.533 27.833 7.199 41.5 3.667 13.667 9.167 28 16.5 43 7.334 15 15.667 28.167 25 39.5 9.334 11.333 17.9 20.6 25.7 27.8a241.7 241.7 0 0 0 24.8 19.7c8.667 6 20.334 12.167 35 18.5 14.667 6.333 23.667 10 27 11 3.334 1 5.667 1.667 7 2l2 .5 2 .5 2 .5 2 .5 2 .5-.199.3-.301.2-.3.2-.2.3-2.5.5-2.5.5-2 .5c-1.333.333-5 1-11 2s-16.833 1.667-32.5 2c-15.666.333-27.166 0-34.5-1l-11-1.5-1.5-.3-1.5-.2.2 1 .3 1 .5 1.5.5 1.5 8.301 18.2C138.266 581.399 144 592.167 150 601.5s13.067 18.434 21.2 27.3c8.2 8.801 14.867 15.6 20 20.4 5.2 4.866 13.634 10.967 25.3 18.3 11.667 7.333 23.667 13.667 36 19 12.334 5.333 23.834 9.333 34.5 12 10.667 2.667 18.5 4.167 23.5 4.5s10.167.667 15.5 1l8 .5-.199.3-.301.2-.3 1-.2 1-1 .2-1 .3-.199.3-.301.2-.3.2-.2.3-.199.3-.301.2-.3.2-.2.3-23 15.5c-15.333 10.333-26.733 17.4-34.199 21.2-7.534 3.866-20.2 9.733-38 17.6-17.867 7.8-37.467 14.533-58.801 20.2-21.333 5.667-39.833 9.667-55.5 12-15.666 2.333-31 3.833-46 4.5s-29.166.667-42.5 0c-13.333-.667-21.5-1.167-24.5-1.5l-4.5-.5-1-.3-1-.2V399zM1107.801 109.8l.199-.3.5-.3.5-.2v792H382v-.5l35.5-3.5c23.667-2.333 44.834-5.167 63.5-8.5 18.667-3.333 38-8 58-14s39-12.5 57-19.5 34.734-14.6 50.2-22.8c15.534-8.134 28.8-15.367 39.8-21.7s23.067-14.233 36.2-23.7c13.2-9.533 25.534-19.066 37-28.6 11.534-9.467 18.067-14.934 19.601-16.4 1.467-1.533 10.133-10.2 26-26 15.8-15.866 28.866-30.133 39.199-42.8 10.334-12.667 20.5-26.167 30.5-40.5s21-31.833 33-52.5 23.5-44 34.5-70 20.334-52.667 28-80c7.667-27.333 13.334-51.833 17-73.5 3.667-21.667 6.167-41.833 7.5-60.5 1.334-18.667 2.101-35.4 2.301-50.2.133-14.866 6.467-27.4 19-37.6 12.467-10.134 25.199-21.7 38.199-34.7s20.067-20.434 21.2-22.3c1.2-1.8 2.134-2.8 2.8-3 .667-.134 5.167-5.8 13.5-17 8.334-11.134 12.567-16.8 12.7-17l.3-.2.5-1 .5-1 .301-.2.199-.3.2-.3.3-.2.301-.2.199-.3.2-.3.3-.2.301-.2zM812 3.8L793 0h316v107l-2 .2-2 .3-1 .5-1 .5-1 .5-1 .5-1.5.5-3 1-27 9c-17 5.667-34.833 10.5-53.5 14.5l-28 6h-5l.2-.3.3-.2.301-.2.199-.3.2-.3.3-.2.301-.2.199-.3 1-.5 1-.5.2-.3.3-.2.301-.2.199-.3 1-.5 1-.5 5-3.3c3.334-2.134 6.167-4.467 8.5-7 2.334-2.467 7.101-6.8 14.301-13C1024.933 106.066 1033 97 1042 85s16.5-23.833 22.5-35.5 9.167-18.333 9.5-20c.334-1.667.667-3 1-4l.5-1.5.5-1 .5-1 .5-1.5.5-1.5.301-1.5.199-1.5-1 .2-1 .3-.199.3-.301.2-.3.2-.2.3-1 .5-1 .5-1 .5-1 .5-.199.3c-.2.134-1.867 1.134-5 3-3.2 1.8-12.134 6.034-26.801 12.7-14.666 6.667-29.5 12.667-44.5 18s-29 9.5-42 12.5-22.566 1.4-28.699-4.8c-6.2-6.134-13.2-11.934-21-17.4-7.867-5.533-16.634-10.966-26.301-16.3a245.399 245.399 0 0 0-30-14c-10.333-4-21.833-7.233-34.5-9.7zM0 850.5V800h.5l.301.2.199.3.2.3.3.2.301.2.199.3 1 .5 1 .5.2.3.3.2.301.2.199.3 9 5.5c6 3.667 11.4 6.733 16.2 9.2 4.867 2.533 16.867 8.533 36 18 19.2 9.533 42.3 18.967 69.3 28.3s47.334 15.667 61 19c13.667 3.333 32.5 6.667 56.5 10s37.834 5.167 41.5 5.5c3.667.333 8.334.667 14 1l8.5.5v.5H0v-50.5z"
                        fill="#fff" stroke="#fff" stroke-width=".5" />
                </svg>
            </a>

            <a class="mx-2" href="https://www.instagram.com/raphyabak1/" target="_blank" aria-label="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" viewBox="0 0 2500 2500" width="2500"
                    height="2500" class="w-5 h-5" aria-hidden="true">
                    <defs>
                        <radialGradient id="0" cx="332.14" cy="2511.81" r="3263.54" gradientUnits="userSpaceOnUse">
                            <stop offset=".09" stop-color="#fa8f21" />
                            <stop offset=".78" stop-color="#d82d7e" />
                        </radialGradient>
                        <radialGradient id="1" cx="1516.14" cy="2623.81" r="2572.12" gradientUnits="userSpaceOnUse">
                            <stop offset=".64" stop-color="#8c3aaa" stop-opacity="0" />
                            <stop offset="1" stop-color="#8c3aaa" />
                        </radialGradient>
                    </defs>
                    <path
                        d="M833.4,1250c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7S833.4,1480.11,833.4,1250m-225.26,0c0,354.5,287.36,641.86,641.86,641.86S1891.86,1604.5,1891.86,1250,1604.5,608.14,1250,608.14,608.14,895.5,608.14,1250M1767.27,582.69a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M745,2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27s373.28,1.31,505.15,7.27c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M734.65,7.57c-133.07,6.06-224,27.16-303.41,58.06C349,97.54,279.38,140.35,209.81,209.81S97.54,349,65.63,431.24c-30.9,79.46-52,170.34-58.06,303.41C1.41,867.93,0,910.54,0,1250s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43S349,2402.37,431.24,2434.37c79.56,30.9,170.34,52,303.41,58.06C868,2498.49,910.54,2500,1250,2500s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95,97.54,2068.86,65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17,1.51,1589.56,0,1250.1,0S868,1.41,734.65,7.57"
                        fill="url(#0)" />
                    <path
                        d="M833.4,1250c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7S833.4,1480.11,833.4,1250m-225.26,0c0,354.5,287.36,641.86,641.86,641.86S1891.86,1604.5,1891.86,1250,1604.5,608.14,1250,608.14,608.14,895.5,608.14,1250M1767.27,582.69a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M745,2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27s373.28,1.31,505.15,7.27c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M734.65,7.57c-133.07,6.06-224,27.16-303.41,58.06C349,97.54,279.38,140.35,209.81,209.81S97.54,349,65.63,431.24c-30.9,79.46-52,170.34-58.06,303.41C1.41,867.93,0,910.54,0,1250s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43S349,2402.37,431.24,2434.37c79.56,30.9,170.34,52,303.41,58.06C868,2498.49,910.54,2500,1250,2500s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95,97.54,2068.86,65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17,1.51,1589.56,0,1250.1,0S868,1.41,734.65,7.57"
                        fill="url(#1)" />
                </svg>
            </a>

            <a class="mx-2" href="https://www.linkedin.com/in/raphael-abayomi/" target="_blank" aria-label="Linkden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" width="2500" height="2500"
                    viewBox="7.025 7.025 497.951 497.95" class="w-5 h-5" aria-hidden="true">
                    <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="-974.482" y1="1306.773" x2="-622.378"
                        y2="1658.877" gradientTransform="translate(1054.43 -1226.825)">
                        <stop offset="0" stop-color="#2489be" />
                        <stop offset="1" stop-color="#0575b3" />
                    </linearGradient>
                    <path
                        d="M256 7.025C118.494 7.025 7.025 118.494 7.025 256S118.494 504.975 256 504.975 504.976 393.506 504.976 256C504.975 118.494 393.504 7.025 256 7.025zm-66.427 369.343h-54.665V199.761h54.665v176.607zM161.98 176.633c-17.853 0-32.326-14.591-32.326-32.587 0-17.998 14.475-32.588 32.326-32.588s32.324 14.59 32.324 32.588c.001 17.997-14.472 32.587-32.324 32.587zm232.45 199.735h-54.4v-92.704c0-25.426-9.658-39.619-29.763-39.619-21.881 0-33.312 14.782-33.312 39.619v92.704h-52.43V199.761h52.43v23.786s15.771-29.173 53.219-29.173c37.449 0 64.257 22.866 64.257 70.169l-.001 111.825z"
                        fill="url(#a)" />
                </svg>
            </a>

            <a class="mx-2" href="https://github.com/raphyabak" target="_blank" aria-label="Github">
                <svg class="w-10 h-10 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9 1.4.3 2.6.4 3.8.4 8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1-8.4 1.9-15.9 2.7-22.6 2.7-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1 10.5 0 20-3.4 25.6-6 2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8 0 0 1.6-.5 5-.5 8.1 0 26.4 3.1 56.6 24.1 17.9-5.1 37-7.6 56.1-7.7 19 .1 38.2 2.6 56.1 7.7 30.2-21 48.5-24.1 56.6-24.1 3.4 0 5 .5 5 .5 12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5 1.2 0 2.6-.1 4-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z" />
                </svg>
            </a>
        </div>
    </section>

    {{-- <section class="items-stretch px-4 pt-6 pb-20 mx-auto bg-gray-800 md:px-10">
        <div class="grid grid-cols-1 gap-24 md:grid-cols-2">
            <div>
                <p class="mt-2 mb-3 font-mono text-3xl font-bold text-gray-200">About Me</p>
                <p class="text-lg tracking-wide text-white">Talentented Back-End developer adept at contributing to high
                    collaborative work environment, finding solutions and determining customer satisfaction. Designed
                    and developed web applications accross multiple APIs, third party integrations and databases.
                    Passionate and hardworking with penchant for developing customized interfaces that factor in unique
                    demands for accessibility, reachability and security.</p>
                <p class="mt-10 mb-5 font-mono text-3xl font-bold text-gray-200">Experience</p>
                <div class="mb-8 break-inside-avoid">
                    <div>
                        <h3 class="font-mono text-lg font-semibold text-white leading-snugish">Achievers consortium</h3>
                        <p class="mb-2 italic leading-normal text-white text-md">March 2018 – Present | Contracted Web
                            Developer</p>
                    </div>
                    <p class="mt-2 font-mono leading-normal text-white text-md">Built scalable and responsive web
                        applications.</p>
                </div>

                <div class="mb-4 break-inside-avoid">
                    <div>
                        <h3 class="font-mono text-lg font-semibold text-white leading-snugish">QuipKraft Solutions</h3>
                        <p class="mb-2 italic leading-normal text-white text-md">August 2019 – October 2020 | Contracted
                            Web Developer</p>
                    </div>
                    <p class="mt-2 font-mono leading-normal text-white text-md">Built scalable and responsive web
                        applications.</p>
                </div>
                <p class="mt-10 mb-5 font-mono text-3xl font-bold text-gray-200">Education</p>
                <div class="mb-8 break-inside-avoid">
                    <div>
                        <h3 class="mb-1 font-mono text-lg font-semibold text-white leading-snugish">Bostom Primary
                            School</h3>
                        <p class="mb-2 leading-normal text-white text-md">September 2004 – July 2010 | Primary School
                            Leaving Certificate</p>
                    </div>
                </div>

                <div class="mb-8 break-inside-avoid">
                    <div>
                        <h3 class="mb-1 font-mono text-lg font-semibold text-white leading-snugish">Gracelead College
                        </h3>
                        <p class="mb-2 leading-normal text-white text-md">September 2010 – June 2016 | Senior School
                            Leaving Certificate</p>
                    </div>
                </div>

                <div class="mb-4 break-inside-avoid">
                    <div>
                        <h3 class="mb-1 font-mono text-lg font-semibold text-white leading-snugish">Ondo State
                            University of Science and Technology</h3>
                        <p class="mb-2 leading-normal text-white text-md">November 2016 – Present | Undergraduate in
                            Mathematics</p>
                    </div>
                </div>
            </div>
            <div>
                <!-- <h1 class="mb-6 text-2xl font-light md:text-3xl">Advanced Questions</h1> -->
                <p class="mt-2 mb-3 font-mono text-3xl font-bold text-gray-200">Projects</p>
                <div class="mb-8 break-inside-avoid">
                    <div>
                        <a href="http://teeenu.herokuapp.com/" target="_blank">
                            <h3
                                class="mb-1 font-mono text-xl font-semibold text-white hover:text-gray-400 leading-snugish">
                                Student E-Verify <span
                                    class="inline-block font-normal transition duration-100 ease-in text-gray-550 print:text-black group-hover:text-gray-700">↗</span>
                            </h3>
                        </a>
                        <p class="mb-2 italic font-semibold leading-normal text-white text-md">HTML, CSS, Javascript,
                            Laravel (PHP).</p>
                    </div>
                    <p class="mt-2 font-mono leading-normal text-white text-md">Verify the admission validity of
                        students using their matric number.</p>
                </div>

                <div class="mb-8 break-inside-avoid">
                    <div>
                        <a href="http://omolayo.herokuapp.com/" target="_blank">
                            <h3
                                class="mb-1 font-mono text-xl font-semibold text-white hover:text-gray-400 leading-snugish">
                                Sales and Inventory System <span
                                    class="inline-block font-normal transition duration-100 ease-in text-gray-550 print:text-black group-hover:text-gray-700">↗</span>
                            </h3>
                        </a>
                        <p class="mb-2 italic font-semibold leading-normal text-white text-md">HTML, CSS, Javascript,
                            Laravel (PHP).</p>
                    </div>
                    <p class="mt-2 font-mono leading-normal text-white text-md">Create Sale and keep inventory of
                        products, also add customer details to sales and keep track of staffs</p>
                </div>
                <div class="mb-4 break-inside-avoid">
                    <div>
                        <a href="http://hagin.herokuapp.com/" target="_blank">
                            <h3
                                class="mb-1 font-mono text-xl font-semibold text-white hover:text-gray-400 leading-snugish">
                                Chatbot System <span
                                    class="inline-block font-normal transition duration-100 ease-in text-gray-550 print:text-black group-hover:text-gray-700">↗</span>
                            </h3>
                        </a>
                        <p class="mb-2 italic font-semibold leading-normal text-white text-md">HTML, CSS, Javascript,
                            Laravel (PHP).</p>
                    </div>
                    <p class="mt-2 font-mono leading-normal text-white text-md">Create Sale and keep inventory of
                        products, also add customer details to sales and keep track of staffs</p>
                </div>
                <p class="mt-10 mb-5 font-mono text-3xl font-bold text-gray-200">Skills</p>
                <div class="my-3.2 last:pb-1.5">
                    <ul class="flex flex-wrap text-md leading-relaxed -mr-1.5 -mb-1.6">
                        <li
                            class="px-3 mb-2 mr-2 text-base font-bold bg-gray-200 text-gray-750 print:bg-white print:border-inset">
                            HTML</li>
                        <li
                            class="px-3 mb-2 mr-2 text-base font-bold bg-gray-200 text-gray-750 print:bg-white print:border-inset">
                            CSS</li>
                        <li
                            class="px-3 mb-2 mr-2 text-base font-bold bg-gray-200 text-gray-750 print:bg-white print:border-inset">
                            Javascript</li>
                        <li
                            class="px-3 mb-2 mr-2 text-base font-bold bg-gray-200 text-gray-750 print:bg-white print:border-inset">
                            PHP</li>
                        <li
                            class="px-3 mb-2 mr-2 text-base font-bold bg-gray-200 text-gray-750 print:bg-white print:border-inset">
                            MYSQL</li>
                        <li
                            class="px-3 mb-2 mr-2 text-base font-bold bg-gray-200 text-gray-750 print:bg-white print:border-inset">
                            LARAVEL</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <div
        class="relative flex justify-center min-h-screen mb-2 bg-white items-top dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                        <h1 class="text-4xl font-extrabold tracking-tight text-gray-800 sm:text-5xl dark:text-white">Get
                            in touch</h1>
                        <p class="mt-2 text-lg font-medium text-gray-600 text-normal sm:text-2xl dark:text-gray-400">
                            Fill in the form to get in touch with me</p>

                        <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div class="w-40 ml-4 font-semibold tracking-wide text-md">74,Ago-Iwoye Street, Lagos State,
                                104101</div>
                        </div>
                        <a href="tel://+2348068325446">
                        <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div class="w-40 ml-4 font-semibold tracking-wide text-md">+2348068325446</div>

                        </div>
                    </a>
                        <a href="mailto://raphyabak@gmail.com">
                        <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div class="w-40 ml-4 font-semibold tracking-wide text-md">raphyabak@gmail.com</div>

                        </div>
                    </a>
                    </div>

                    @livewire('contact')
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <section class="px-4 py-16 mx-auto max-w-7xl">
        <h1 class="mb-12 text-sm font-bold tracking-wide text-center text-gray-800 uppercase">Proud to be part in these amazing journey.</h1>
        <div class="grid grid-cols-1 gap-10 text-center lg:grid-cols-3">
          <div class="flex items-center justify-center max-w-md p-6 bg-gray-300 bg-opacity-25">
            <a href="https://internship.zuri.team">
            <img src="{{asset('hng.png')}}" alt="Todoist Logo" class="block object-contain h-16" />
            </a>
          </div>
          <div class="flex items-center justify-center max-w-md p-6 bg-gray-300 bg-opacity-25">
            <a href="https://internship.zuri.team">
            <img src="{{asset('i4g.png')}}" alt="Slack Logo" class="block object-contain h-16" />
            </a>
          </div>
          <div class="flex items-center justify-center max-w-md p-6 bg-gray-300 bg-opacity-25">
            <a href="https://internship.zuri.team">
            <img src="{{asset('zry.png')}}" alt="Typeform Logo" class="block object-contain h-16" />
            </a>
          </div>
        </div>
      </section> --}}

    {{-- <div class="w-full px-8 mt-4 bg-gray-800">
        <div class="container inline-flex flex-col flex-wrap items-center px-5 py-6 mx-auto sm:flex-row">
            <p class="mx-auto text-center text-white text-md sm:text-left">© 2021 - Raphael Abayomi</p>
        </div>
    </div> --}}
    @livewireScripts
</body>

</html>
