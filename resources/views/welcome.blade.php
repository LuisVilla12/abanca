<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/ico.ico') }}" type="image/x-icon">

    <title>Bienvenido</title>

    @stack('scripts')

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>

    {{-- Barra de estilos --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-84c832a1.css') }}">
</head>
<body class="bg-white    flex flex-col justify-between">
    <header class="p-5  bg-header shadow">
        <div class="flex justify-between items-center container mx-auto">
            <div class="flex items-center">
                <img src="{{ asset('img/iconoo.png') }}" alt="logotipo" class="w-6 h-6 object-cover md:w-8 md:h-8">
                <a href="{{ route('index') }}">
                    <p class="text-white font-bold text-2xl ml-3">
                        ABANCA<span></span>
                    </p>
                </a>
            </div>
            <ul class="hidden md:block">
                <li class="inline py-5 px-2 ">
                    <a href="{{ route('material-apoyo') }}" class="inline-block  text-white text-xl md:mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        Material de apoyo</a>
                </li>

                <li class="inline py-5 px-2">
                    <a href="{{ route('conoce') }}" class="inline-block  text-white text-xl md:mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>

                        Conócenos</a>
                </li>

                @auth

                    <li class="inline-block py-5 px-2">
                        <form method="POST" action="{{route('logout') }}" class="mt-1"> 
                            @csrf 
                            <button type="submit" class=" flex text-white text-xl md:mr-3  cursor-pointer mt-1 " >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                                Cerrar sesión</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="inline py-5 px-2">
                        <a href="{{ route('login') }}" class="inline-block  text-white text-xl md:mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 inline">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            Iniciar sesión</a>
                    </li>
                @endguest
                <li class="inline">
                    <img class="hidden md:inline object-cover w-8" src=" {{ asset('img/LogoITSX.png') }}"
                        alt="logo ITSX">
                </li>
                <li class="inline">
                    <img class="hidden md:inline object-cover w-8" src="{{ asset('img/LogoUV.png') }}" alt="logo UV">
                </li>
            </ul>
            <div class="md:hidden">
                <a href="#" class="md:hidden">
                    M
                </a>
            </div>
        </div>
    </header>
    <section class="menu__hidden"></section>
    <main class=" mt-10  min-h-screen flex-1">
        {{-- Conoce --}}
        <section class="container my-20 mx-auto">
            {{-- tenia 155 --}}
            <div class="grid  md:grid-cols-5 md:grid-rows-[175px]">
                <div class="">
                    <img src="{{ asset('img/Logo.png') }} " alt="logo"
                        class="hidden ml-6 md:block md:max-h-80 md:row-start-1 md:row-end-2 ">
                </div>
                <div class="mt-4 md:mt-0 md:col-start-2 md:col-end-4 md:row-start-1 md:row-end-3">
                    <img src="{{ asset('img/hola.jpg') }}" alt="mask" class="w-full md:h-full">
                </div>
                <div class="md:col-start-4 md:col-end-6">
                    <h2
                        class="uppercase font-semibold text-titulo text-4xl my-3 mx-0 text-center md:text-left md:text-6xl">
                        Autismo lo que necesitas conocer.</h2>
                </div>
                <div
                    class="bg-cyan-transparente py-6  px-4 md:mr-20 md:row-start-2 md:row-end-3 md:col-start-4 md:col-end-6">
                    <p class="m-0 text-2xl text-justify ml--14">Los trastornos del espectro autista (TEA), comúnmente
                        llamados "autismo", son un grupo de desórdenes complejos del desarrollo. Se caracterizan por
                        dificultades en la interacción social y la comunicación.</p>
                    <div class="grid items-center">
                        <a href=""
                            class="m-0 rounded-xl py-3 px-6 text-white bg-pink-700 mt-4 text-2xl font-semibold md:w-auto hover:cursor-pointer inline-block text-center">Conoce
                            más</a>
                    </div>
                </div>
            </div>
        </section>
        {{-- Sabias --}}
        <section class="my-20">
            <div class="my-13 mx-auto grid md:grid-cols-2 gap-3 md:gap-4  container">
                <div class="px-3 md:px-0">
                    <h3
                        class="uppercase font-semibold text-titulo text-4xl my-3 mx-0 text-center md:text-left md:text-6xl">
                        Sabiás que...</h3>
                    <h4 class="text-primario text-3xl text-center md:text-left md:text-4xl">Es un trastorno que
                        comparten muchos genios</h3>
                        <p class="text-2xl mt-4"> Celebridades como Woody Allen, Michael Jackson Bill Gates y Stanley
                            Kubrick son algunos de ellos.</p>
                        <div class="grid place-items-center">
                            <a href=""
                                class="m-0 rounded-xl py-3 px-6 text-white bg-pink-700 mt-4 text-2xl font-semibold md:w-auto hover:cursor-pointer">Conoce
                                más</a>
                        </div>
                </div>
                <div class="mt-4 md:grid md:place-items-center md:max-h-80 object-cover">
                    <img src="{{ asset('img/hola2.jpg') }}" alt="sabias" class="md:max-h-80">
                </div>
            </div>
        </section>
        {{-- Interes --}}
        <section class="my-20 bg-amarillo  py-9 px-0 ">
            <div class="mx-auto container  grid md:grid-cols-2 place-items-center md:gap-2 ">
                <div class="grid place-items-center h-80">
                    <img src="{{ asset('img/Personajes xicoclass.png') }} " alt="img"
                        class="max-h-50 md:max-h-60">
                </div>
                <div class="">
                    <p class="text-justify m-0 text-white font-bold text-2xl px-3 md:px-0">La Organización Mundial de
                        la Salud (OMS), estima que la incidencia del autismo a nivel mundial es de 1/160, pero mencionan
                        que existen variaciones muy importantes en cuanto a las cifras de diversos estudios en el mundo.
                        La CDC (Centers for Disease Control and Prevention), una de las instituciones de mayor prestigio
                        en cuanto a datos y estadísticas, actualmente manejan la cifra de 1 caso de autismo por cada 68
                        nacimientos.</p>
                </div>
            </div>
        </section>
        {{-- Noticias --}}
      

        {{-- ver mas noticias --}}
        <div class="grid place-items-center">
            <a class="my-4 rounded-xl py-3 px-6 text-white bg-orange-500 mt-4 text-2xl font-semibold md:w-auto hover:cursor-pointer"
                href="{{ route('noticias.catalogo') }}"> Ver más noticias</a>
        </div>
    </main>
    <footer class="bg-footer pt-2 mt-10">
        <div class="container mx-auto grid md:grid-cols-3 gap-5">
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.906711496011!2d-96.88233098512036!3d19.50264898684455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85db324c8ce295c7%3A0x4da58d2adc774de0!2sInstituto%20Tecnol%C3%B3gico%20Superior%20de%20Xalapa!5e0!3m2!1ses-419!2smx!4v1664514164837!5m2!1ses-419!2smx"
                    class="w-full h-80" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="md:col-span-2">
                    <nav class="flex justify-center items-center gap-3">
                        <a href="https://www.facebook.com/LuisJi.231245"
                            class="flex text-white mb-3 text-2xl font-bold text-center no-underline  my-2">
                            <img src="{{ asset('img/facebook.png') }}" alt="itsx" class="w-12 h-12">
                        </a>
                        <a href=""
                            class="flex text-white mb-3 text-2xl font-bold text-center no-underline my-2">
                            <img src="{{ asset('img/instagram.png') }}" alt="itsx" class="w-12 h-12">
                        </a>
                        <a href="wa.link/tk95bv"
                            class="flex text-white mb-3 text-2xl font-bold text-center no-underline my-2">
                            <img src="{{ asset('img/whatsapp.png') }}" alt="itsx" class="w-12 h-12">
                        </a>
                    </nav>
                    <div class="footer__descripcion">
                        <p class="text-white text-center text-xl md:text-left flex gap-3 mb-3"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            Sección 5A Reserva Territorial S/N,Santa Bárbara, 91096</p>
                        <p class="text-white text-center md:text-left text-xl flex gap-3 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            2282552625
                        </p>
                        <p class="text-white text-center md:text-left flex gap-3 text-xl mb-3"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                            </svg>
                            Xalapa-Enríquez, Ver.</p>
                    </div>
                </div>
                <div class="flex justify-center items-center flex-col gap-5">
                    <img src="{{ asset('img/Itsxlogos.png') }}" alt="itsx" class="w-16">
                    <img src="{{ asset('img/Uvlogos.png') }}" alt="uv" class="w-16">
                </div>
            </div>
            <div>
                <img class="h-80 mx-auto" src="{{ asset('img/Logo.png') }}" alt="">
            </div>
        </div>

        <div class="py-3 px-0 bg-copy">
            <p class="font-bold text-center text-xl text-white">ABANCA - &copy;Todos los derechos reservados
                {{ now()->year }}</p>
        </div>
    </footer>
</body>

</html>
