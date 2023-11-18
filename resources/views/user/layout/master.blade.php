<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dist/output.css">
    <title>online-booking-system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="body font-mono">

    <!-- navigation -->

    <nav class="dark:bg-main-100">

        <div class="flex justify-between items-center p-4 md:justify-between md:px-8 md:p-0 md:py-4">

            <!-- LOGO -->
            <div class="">

                <h1 class="text-5xl font-bold text-main-100 dark:text-white"><i class="fa-solid fa-film"></i></h1>

            </div>

            <div id="menuBox"
                class="absolute justify-center -top-80 right-10 rounded-xl shadow-lg md:rounded-none md:shadow-none bg-main-100 p-6 w-[50%] md:bg-transparent md:static md:flex md:justify-between md:items-center md:top-auto md:p-0 md:w-[78%] dark:bg-white md:dark:bg-transparent transition-all duration-300">

                <!-- MENU -->
                <div class="flex flex-col items-start gap-4 md:flex-row md:gap-0 md:justify-evenly md:w-[60%]">

                    <a href="#home"
                        class="text-base text-gray font-semibold md:text-main-100  hover:text-slate-400 duration-200 dark:text-main-100 md:dark:text-white hover:dark:text-secondary-200">Home</a>
                    <a href="#movies"
                        class="text-base text-gray font-semibold md:text-main-100 hover:text-slate-400 duration-200 dark:text-main-100 md:dark:text-white hover:dark:text-secondary-200">Movies</a>
                    <a href="#booking"
                        class="text-base text-gray font-semibold md:text-main-100 hover:text-slate-400 duration-200 dark:text-main-100 md:dark:text-white hover:dark:text-secondary-200">Booking</a>
                    <a href="#about us"
                        class="text-base text-gray font-semibold md:text-main-100 hover:text-slate-400 duration-200 dark:text-main-100 md:dark:text-white hover:dark:text-secondary-200">About
                        Us</a>

                </div>

                <!-- BUTTON -->
                <div class="flex flex-col mt-2 md:mt-0 md:flex-row md:justify-evenly md:items-center md:gap-4">
                    {{-- profile button  --}}
                    <a href="">
                        <button
                            class="my-2 text-gray md:p-2 md:px-3 md:rounded-md w-max md:text-main-100 text-base font-semibold md:font-medium tracking-wide hover:text-secondary-200 dark:hover:text-secondary-200 md:border-2 dark:text-main-100 md:border-main-100 md:hover:bg-main-100 md:hover:text-slate-400 duration-200 md:dark:bg-secondary-100 md:dark:text-white md:dark:hover:text-white md:hover:dark:border-secondary-200 md:block">{{ auth()->user()->name }}</button>
                    </a>
                    {{-- logout button  --}}
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button
                            class="my-2 text-gray md:p-2 md:px-3 md:rounded-md w-max md:text-main-100 text-base font-semibold md:font-medium tracking-wide hover:text-secondary-200 dark:hover:text-secondary-200 md:border-2 dark:text-main-100 md:border-main-100 md:hover:bg-main-100 md:hover:text-slate-400 duration-200 md:dark:bg-secondary-100 md:dark:text-white md:dark:hover:text-white md:hover:dark:border-secondary-200 md:block">Logout</button>

                    </form>




                    <!-- theme -->
                    <div id="theme" class="light my-1 cursor-pointer md:my-0">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" id="light" class="w-6 h-6 text-slate-400 active:text-green-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" id="dark"
                            class="w-6 h-6 hidden text-slate-600 dark:text-slate-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>

                    </div>

                </div>

                <div id="back-click" class="md:hidden cursor-pointer ">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6 absolute top-6 right-6 text-white dark:text-main-100 md:static md:top-auto md:right-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>


                </div>

            </div>

            <!-- menu-bottom -->
            <div id="menu" class="md:hidden cursor-pointer">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor"
                    class=" w-8 h-8 text-main-100  hover:text-secondary-200 duration-200 dark:text-white hover:dark:text-secondary-200">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

            </div>

        </div>
    </nav>

    @yield('content')




</body>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    const theme = document.getElementById("theme");
    const light = document.getElementById("light");
    const dark = document.getElementById("dark");
    const menu = document.getElementById("menu");
    const menuBox = document.getElementById("menuBox");
    const backClick = document.getElementById("back-click");

    const darkTheme = () => {
        document.documentElement.classList.add("dark");
        localStorage.setItem("change-theme", "dark");
        light.classList.add("hidden");
        dark.classList.remove("hidden");
    };

    const lightTheme = () => {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("change-theme", "light");
        dark.classList.add("hidden");
        light.classList.remove("hidden");
    };

    theme.addEventListener("click", () => {
        const themeData = localStorage.getItem("change-theme");

        if (themeData === "dark") {
            lightTheme();
        } else {
            darkTheme();
        }
    });

    const themeData = localStorage.getItem("change-theme");

    if (themeData === "dark") {
        darkTheme();
    } else {
        lightTheme();
    }

    menu.addEventListener("click", () => {
        menuBox.style.top = "15%";
    });

    backClick.addEventListener("click", () => {
        menuBox.style.top = "-100%";
    });
</script>

</html>
