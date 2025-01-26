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

<body class="font-ubuntu antialiased min-w-[360px] w-full"><!--dark:bg-black dark:text-white/50-->
    <div class="bg-gray-50"> <!-- text-black/50 dark:bg-black dark:text-white/50-->
        <header class=""><!--grid grid-cols-2 items-center gap-2 py-2 lg:grid-cols-3-->
            @include('layouts.left-hidded-menu')
        </header>
        <main>
            
            {{-- Встречающий блок --}}
            <div class="bg-gray-200 flex justify-center items-center [height:calc(100vh-10rem)] md:[height:calc(100vh-7rem)]">
                <div class="flex flex-wrap w-3/4 md:w-5/6">
                    <div class="flex flex-col justify-center items-start w-full md:w-1/2 text-white ">
                        <h1 class="text-2xl md:text-5xl font-bold text-outline">РЕГИОНАЛЬНЫЙ ЦЕНТР ОБРАБОТКИ ИНФОРМАЦИИ
                        </h1>
                        <br>
                        <p class="text-xl">Донецкая народная республика</p>
                    </div>
                    <div class="flex justify-center items-center h-auto md:h-full w-full md:w-1/2">
                        <img src="{{url('images/datacenter.png')}} " alt="Компьютер" />
                    </div>
                </div>
                <div class="absolute w-max h-screen"> <x-figure-cloud class="w-max h-max" /> </div>
            </div>
            
            {{-- Блок описания предприятия --}}
            <div class=" bg-gray-100 w-full">
                <div class="text-[#333333] container mx-auto flex justify-center w-10/12  py-16">
                    <div class="w-full text-ext_xl text-justify">
                        <p class=""> <span class="text-left font-bold">Региональный центр обработки информации (РЦОИ)</span>
                            является структурным подразделением Государственного бюджетного образовательного учреждения
                            дополнительного профессионального образования «Донецкий республиканский институт
                            развития образования».
                        </p>
                        <p> <span class="font-bold">Учредитель:</span>
                            Министерство образования и науки Донецкой Народной Республики
                        </p>
                        <p> <span class="font-bold">Адрес учредителя:</span>
                            ул. Университетская, 83А, г. Донецк, 283048
                        </p>
                        <p><span class="font-bold">Целью</span>
                            создания РЦОИ является обеспечение информационного,
                            организационного и технологического сопровождения ГИА в Донецкой Народной
                            Республике, а также мониторинговых процедур по оценке качества образования.
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative min-h-screen flex flex-col items-center justify-center font-ubuntu selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <h2 class="text-5xl font-bold text-center py-10">Основные задачи РЦОИ</h2>
                    <div class="grid gap-6 lg:grid-cols-3 lg:gap-8">
                        <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none  lg:pb-10">                           
                                <p class="mt-4 text-ext_sm">
                                    обеспечение деятельности по формированию и ведению региональной информационной
                                    системы
                                </p>
                        </div>

                        <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none  lg:pb-10">
                           
                                <p class="mt-4 text-ext_sm">
                                    информирование участников ГИА и их родителей (законных представителей) по вопросам
                                    организации и проведения ГИА, подачи и рассмотрения апелляций на результаты и/или
                                    нарушения Порядка ГИА-9 и Порядка ГИА-11
                                </p>
                        </div>

                        <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none  lg:pb-10">                          
                                <p class="mt-4 text-ext_sm">
                                    обработка экзаменационных работ участников ГИА
                                </p>
                        </div>

                        <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none  lg:pb-10">
                                <p class="mt-4 text-ext_sm">
                                    обеспечение подготовки статистических и информационно-аналитических материалов о
                                    результатах ГИА
                                </p>
                        </div>

                        <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none  lg:pb-10">                          
                                <p class="mt-4 text-ext_sm">
                                    подготовка нормативных, статистических, аналитических, научно-методических и
                                    информационных материалов по вопросам оценки качества образования
                                </p>
                        </div>

                        <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none  lg:pb-10">                        
                                <p class="mt-4 text-ext_sm">
                                    организационное и технологическое обеспечение проведения региональных исследований
                                    оценки качества образования, проведение тренировочных тестирований и экзаменов,
                                    внедрение инновационных подходов к оценке качества образования
                                </p>
                        </div>

                        <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none  lg:pb-10">
                                <p class="mt-4 text-ext_sm"> </p>
                        </div>

                        <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none  lg:pb-10">
                                <p class="mt-4 text-ext_sm">
                                    формирование образовательной статистики учебных достижений обучающихся и качества
                                    образования в образовательных организациях Донецкой Народной Республики (за
                                    исключением ГИА), а также оказание консультационных услуг в сфере образования в
                                    части оценки качества образования (за исключением ГИА)
                                </p>
                        </div>

                        <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none  lg:pb-10">
                                <p class="mt-4 text-ext_sm"> </p>
                        </div>

                    </div>
        </main>

        <footer class="py-3 text-center text-sm text-black ">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>
    </div>
    </div>
</body>

</html>