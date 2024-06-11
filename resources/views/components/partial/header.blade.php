{{-- Header Section --}}
<header>
    {{-- Navbar --}}
    <nav class="bg-primary-950/90 fixed w-full z-20 top-0 start-0 border-b border-primary-800">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://alfaruqy.me" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src={{ asset('images/alfaruqy-logo.png') }} class="h-8" alt="Alfaruqy Logo">
                <span
                    class="self-center text-2xl uppercase font-semibold whitespace-nowrap text-primary-50 hidden md:block">Alfaruqy</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="#contact"
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium rounded-lg group bg-gradient-to-br from-primary-200 to-primary-300 group-hover:from-primary-600 group-hover:to-primary-400 text-primary-50 focus:ring-4 focus:outline-none focus:ring-primary-200 dark:focus:ring-primary-800 cursor-pointer">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-gradient-to-br from-primary-400 to-primary-600 rounded-md group-hover:bg-opacity-0 flex gap-2 justify-center items-center uppercase group-hover:text-primary-700">
                        Hire Me <div><svg
                                class="ml-2 -mr-1 w-5 h-5 rotate-90 transition-all group-hover:text-primary-50 group-hover:translate-y-1"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </span>
                </a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-primary-500 rounded-lg md:hidden hover:bg-primary-100 focus:outline-none focus:ring-2 focus:ring-primary-200"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-primary-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 text-primary-50">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 transition-all text-primary-50 rounded hover:bg-primary-100 md:hover:bg-transparent md:hover:text-primary-300 md:p-0 md:dark:hover:text-primary-500 dark:text-primary-50 dark:hover:bg-primary-700 dark:hover:text-primary-50 md:dark:hover:bg-transparent dark:border-primary-700">Home</a>
                    </li>
                    <li>
                        <a href="#projects"
                            class="block py-2 px-3 transition-all text-primary-50 rounded hover:bg-primary-100 md:hover:bg-transparent md:hover:text-primary-300 md:p-0 md:dark:hover:text-primary-500 dark:text-primary-50 dark:hover:bg-primary-700 dark:hover:text-primary-50 md:dark:hover:bg-transparent dark:border-primary-700">Projects</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block py-2 px-3 transition-all text-primary-50 rounded hover:bg-primary-100 md:hover:bg-transparent md:hover:text-primary-300 md:p-0 md:dark:hover:text-primary-500 dark:text-primary-50 dark:hover:bg-primary-700 dark:hover:text-primary-50 md:dark:hover:bg-transparent dark:border-primary-700">About
                            Me</a>
                    </li>
                    <li>
                        <a href="#testimonial"
                            class="block py-2 px-3 transition-all text-primary-50 rounded hover:bg-primary-100 md:hover:bg-transparent md:hover:text-primary-300 md:p-0 md:dark:hover:text-primary-500 dark:text-primary-50 dark:hover:bg-primary-700 dark:hover:text-primary-50 md:dark:hover:bg-transparent dark:border-primary-700">Testimonial</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
