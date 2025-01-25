<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>РЦОИ ДНР</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        @vite(['resources/css/tailwind.css'])
    @endif

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50 min-w-[360px] w-full">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        @include('layouts.left-hidded-menu')
        <div class="relative bg-gray-200 justify-around items-center h-screen w-full">
            <div class="flex h-full w-3/4"> <!--shadow h-svh -->
                <div class="flex flex-col justify-center items-start w-1/2">
                    <h1 class="text-4xl font-bold">РЕГИОНАЛЬНЫЙ ЦЕНТР ОБРАБОТКИ ИНФОРМАЦИИ</h1>
                    <p class="text-lg">Донецкая народная республика</p>
                </div>
                <div class="relative flex justify-center items-center h-full w-1/2">
                    <img src="{{asset('images/datacenter.png')}} " class="absolute" alt="Компьютер" />
                </div>
                

            </div>
            <x-figure-cloud class="flex absolute w-40 h-40" />
        </div>

        <div class="bg-white shadow h-40 md:h-44 w-full">
            <div class="t059">
                <div class="t-container t-align_center">
                    <div class="t-col t-col_12">
                        <div class="t059__text-impact t-text-impact t-text-impact_xs t-animate t-animate_started"
                            data-animate-style="fadeinleft" field="text">
                            <p style="text-align: left;"><strong style="color: rgb(51, 51, 51);">
                                    Региональный центр
                                    обработки информации (РЦОИ) </strong><span style="color: rgb(51, 51, 51);">является
                                    структурным подразделением Государственного бюджетного образовательного учреждения
                                    дополнительного профессионального образования «Донецкий республиканский институт
                                    развития образования».</span></p>
                            <p style="text-align: left;"><strong
                                    style="color: rgb(51, 51, 51);">Учредитель:</strong><span
                                    style="color: rgb(51, 51, 51);"> Министерство образования и науки Донецкой Народной
                                    Республики</span></p>
                            <p style="text-align: left;"><strong style="color: rgb(51, 51, 51);">Адрес
                                    учредителя:</strong><span style="color: rgb(51, 51, 51);"> ул. Университетская, 83А,
                                    г. Донецк, 283048</span></p>
                            <p style="text-align: left;"><strong style="color: rgb(51, 51, 51);">Целью</strong><span
                                    style="color: rgb(51, 51, 51);"> создания РЦОИ является обеспечение информационного,
                                    организационного и технологического сопровождения ГИА в Донецкой Народной
                                    Республике, а также мониторинговых процедур по оценке качества образования.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-2 lg:grid-cols-3">
                    {{-- <div class="bg-gray-200 shadow h-40 md:h-44 w-full"></div> --}}
                </header>

                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <a href="https://laravel.com/docs" id="docs-card"
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div class="relative flex items-center gap-6 lg:items-end">
                                <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                    <div
                                        class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">

                                    </div>

                                    <div class="pt-3 sm:pt-5 lg:pt-0">
                                        <h2 class="text-xl font-semibold text-black dark:text-white">Documentation</h2>

                                        <p class="mt-4 text-sm/relaxed">
                                            Laravel has wonderful documentation covering every aspect of the framework.
                                            Whether you are a newcomer or have prior experience with Laravel, we
                                            recommend reading our documentation from beginning to end.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="https://laracasts.com"
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">


                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                    development. Check them out, see for yourself, and massively level up your
                                    development skills in the process.
                                </p>
                            </div>
                        </a>

                        <a href="https://laravel-news.com"
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">


                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the
                                    latest and most important news in the Laravel ecosystem, including new package
                                    releases and tutorials.
                                </p>
                            </div>

                            <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">


                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a
                                        href="https://forge.laravel.com"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white dark:focus-visible:ring-[#FF2D20]">Forge</a>,
                                    <a href="https://vapor.laravel.com"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Vapor</a>,
                                    <a href="https://nova.laravel.com"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Nova</a>,
                                    <a href="https://envoyer.io"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Envoyer</a>,
                                    and <a href="https://herd.laravel.com"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Herd</a>
                                    help you take your projects to the next level. Pair them with powerful open source
                                    libraries like <a href="https://laravel.com/docs/billing"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Cashier</a>,
                                    <a href="https://laravel.com/docs/dusk"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Dusk</a>,
                                    <a href="https://laravel.com/docs/broadcasting"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Echo</a>,
                                    <a href="https://laravel.com/docs/horizon"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Horizon</a>,
                                    <a href="https://laravel.com/docs/sanctum"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Sanctum</a>,
                                    <a href="https://laravel.com/docs/telescope"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Telescope</a>,
                                    and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </main>

                <footer class="py-3 text-center text-sm text-black dark:text-white/70">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </footer>
            </div>
        </div>
    </div>
</body>

</html>