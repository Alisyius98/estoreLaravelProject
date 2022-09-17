<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" sizes="114x114" href="{{ asset('images/esFavIcon.ico') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eStore</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <script src="https://kit.fontawesome.com/07a08ee157.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
    <nav id="header" class="w-full z-30 top-0 py-1 bg-red-50">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                                href="#">Help</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                                href="#">About</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                    href="/">
                    <svg class="fill-current text-gray-800 mr-2" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                    </svg>
                    eSTORE
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">
                <ul class="flex space-x-6 mr-6 text-lg">
                    <li>
                        <a href="/admin/create" class="hover:text-laravel "><i class="fa-solid fa-circle-plus"></i> Add </a>
                    </li>

                    <li>
                        <a href="/admin/manage" class="hover:text-laravel"><i class="fa-duotone fa-gears fa-solid"></i> Edit</a>
                    </li>
                    <li>
                        <form class="inline" method="POST" action="/logout">
                            @csrf
                            <button type="submit">
                                <i class="fa-light fa-power-off fa-solid"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>
    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-black h-24 mt-24 opacity-90 md:justify-center bg-red-50 ">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

        <a href="" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5 hover:bg-pink-400">Learn more</a>
    </footer>
</body>

</html>