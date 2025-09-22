<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Clínica Canaã Mais</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lusitana:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>    
</head>
<body>
    <section class="h-screen z-1 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="./assets/pexels-olly-774866.jpg" alt="" class="z-1 h-full w-full object-cover object-[30%_center] md:object-[center_70%]">

        <div class="absolute flex flex-col max-w-[1800px] justify-between inset-0 z-2 px-4 md:px-12 mx-auto py-8">
            <header class="hidden md:flex mx-auto w-full max-w-8xl flex items-center justify-between text-white">
                <div class="flex items-center gap-2">
                    <div class="w-[70px] overflow-hidden">
                        <img src="./assets/logo.png" alt="" class="h-full w-full object-contain">
                    </div>
                    <span class="">Clínica Canaã Mais</span>
                </div>
                <div class="flex items-center gap-12">
                    <a href="">Sobre</a>
                    <a href="">Serviços</a>
                    <a href="">Profissionais</a>
                    <a href="">Contato</a>
                </div>
                <div class="">
                    <a href="" class="flex items-center gap-2 px-4 py-2 rounded-full bg-transparent border border-white px-8 py-4 rounded-full">
                        <span>Contato</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </header>

            <!-- mobile header -->
             <header class="flex md:hidden items-center justify-between">
                <div class="w-[70px] overflow-hidden">
                    <img src="./assets/logo.png" alt="" class="h-full w-full object-contain">
                </div>
                <button class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
             </header>

            <main class="flex flex-col justify-between md:justify-center gap-12">
                <div class="hidden md:flex flex-col w-full">
                    <div class="flex justify-between">
                        <h1 class="text-white text-md md:text-8xl 2xl:text-9xl flex text-right leading-[0.9] ">sentir-se</h1>
                        <h1 class="text-white text-md md:text-8xl 2xl:text-9xl flex text-right leading-[0.9] ">bem começa</h1>
                    </div>

                    <div class="flex justify-end">
                        <h1 class="text-white text-8xl 2xl:text-9xl flex text-right leading-[0.9]">com um simples passo</h1>
                    </div>
                </div>

                <!-- mobile phrase -->
                <div class="md:hidden flex">
                    <h1 class="text-4xl text-white">sentir-se bem começa com um simples passo</h1>
                </div>

                <div class="flex justify-between">
                    <div class="flex flex-col md:flex-row items-top gap-10">
                        <span class="w-[150px] h-[3px] bg-white"></span>
                        <div class="flex flex-col gap-12 max-w-md">
                            <p class="text-white flex text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            <div class="flex flex-col md:flex-row items-center gap-4 justify-between">
                                <a href="" class="bg-white px-8 py-4 cursor-pointer rounded-full text-black flex items-center gap-2 text-sm font-semibold w-full sm:w-auto text-center justify-center">
                                    <span>Quero me consultar</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
                                <a href="" class="bg-white/10 px-8 py-4 cursor-pointer rounded-full text-white border border-white text-sm font-semibold w-full sm:w-auto text-center">
                                    <span>Nossos serviços</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="flex justify-end gap-12">
                        <div class="bg-black/20 text-white h-full rounded-2xl flex gap-4 p-8">
                            <div class="w-[10rem] overflow-hidden rounded-2xl">
                                <img src="./assets/cover.jpg" alt="" class="w-full h-full object-center object-cover">
                            </div>
                            <div class="flex flex-col justify-between">
                                <p class="max-w-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                <p>Fulano de tal</p>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
            </main>
        </div>
    </section>

    <section class="h-screen bg-white">

    </section>

    <section class="h-screen">
        <div class="relative h-screen overflow-hidden">
            <div class="absolute inset-0 h-full bg-gradient-to-b from-transparent via-transparent to-white z-1"></div>
            <img src="./assets/clinica.png" alt="" class="h-full w-full object-cover">
        </div>
    </section>
    <section class="h-screen">
        
    </section>
</body>
</html>