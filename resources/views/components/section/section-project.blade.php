<x-partial.section class="bg-primary-800 antialiased" id='projects'>
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="mb-4 text-4xl tracking-tight font-semibold uppercase text-primary-50">
                My Past Works
            </h2>
            <p class="mt-4 text-base font-normal text-primary-300 sm:text-xl dark:text-primary-400">
                Crafted with skill and care to help my clients grow their business by reaching to more audience!
            </p>
        </div>
        {{-- Projects Grid --}}
        <div
            class="grid grid-cols-1 mt-12 sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3 justify-items-center items-center">
            {{-- Project Card --}}
            <div class="max-w-sm bg-primary-950 border-primary-300 border-2 rounded-lg shadow-md overflow-hidden">
                <a target="_blank" href="https://project1.alfaruqy.me">
                    <img class="rounded-t-md" src={{ asset('images/project-snapshot.png') }} alt="" />
                </a>
                <div class="p-5 flex flex-col items-start">
                    <a target="_blank" href="https://project1.alfaruqy.me">
                        <h3 class="mb-2 text-2xl font-bold tracking-tight text-primary-50">
                            Insan Aulia Primary School Website</h3>
                    </a>
                    <a target="_blank" href="https://project1.alfaruqy.me"
                        class="inline-flex items-center gap-1 font-medium text-primary-500 transition-all hover:underline bg-primary-50 px-4 rounded-lg my-2">
                        insanaulia.sch.id
                        <svg class="w-4 h-4 text-primary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
                        </svg>

                    </a>
                    <p class="mb-3 font-normal text-primary-300">School website that serve as marketing tool
                        for
                        potential parent to attract them for register their children and informational website
                        for student about current news and activities on the school.</p>
                    {{-- Tech stacks used in a project --}}
                    <div class="mt-2 mb-4 flex justify-center items-center gap-0.5">
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="wp" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28 16C28 22.6274 22.6274 28 16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z"
                                    fill="#028CB0" />
                                <path
                                    d="M7.8189 16C7.8189 19.242 9.70462 22.0343 12.4316 23.3615L8.52967 12.671C8.06113 13.7183 7.81892 14.8527 7.8189 16ZM16 24.1811C16.9501 24.1811 17.864 24.0143 18.7198 23.7169L18.6618 23.6081L16.1451 16.718L13.6936 23.8475C14.4189 24.0651 15.1949 24.1811 16 24.1811ZM17.1242 12.1633L20.0833 20.9609L20.9029 18.2338C21.251 17.1024 21.5193 16.2901 21.5193 15.5866C21.5193 14.5712 21.1567 13.8749 20.8521 13.3382C20.4314 12.6565 20.047 12.0835 20.047 11.4163C20.047 10.662 20.6127 9.96571 21.4251 9.96571H21.5266C20.0191 8.58183 18.0464 7.81549 16 7.8189C14.6451 7.81865 13.3113 8.15523 12.1187 8.79837C10.9261 9.4415 9.91211 10.371 9.16791 11.5033L9.69011 11.5178C10.5459 11.5178 11.8659 11.409 11.8659 11.409C12.3156 11.3873 12.3664 12.0327 11.924 12.0835C11.924 12.0835 11.4815 12.1415 10.9811 12.1633L13.9692 21.0262L15.7607 15.6591L14.4842 12.1633C14.1983 12.1475 13.9129 12.1233 13.6284 12.0908C13.1859 12.0618 13.2367 11.3873 13.6791 11.409C13.6791 11.409 15.0281 11.5178 15.8332 11.5178C16.689 11.5178 18.009 11.409 18.009 11.409C18.4514 11.3873 18.5095 12.0327 18.067 12.0835C18.067 12.0835 17.6246 12.1343 17.1242 12.1633ZM20.1123 23.0714C21.3499 22.3518 22.3771 21.32 23.0911 20.0791C23.8051 18.8382 24.1809 17.4316 24.1811 16C24.1811 14.5785 23.8185 13.244 23.1802 12.0763C23.3098 13.3609 23.1153 14.6576 22.6145 15.8477L20.1123 23.0714ZM16 25.4286C13.4994 25.4286 11.1012 24.4352 9.33299 22.667C7.56479 20.8988 6.57143 18.5006 6.57143 16C6.57143 13.4994 7.56479 11.1012 9.33299 9.33299C11.1012 7.56479 13.4994 6.57143 16 6.57143C18.5006 6.57143 20.8988 7.56479 22.667 9.33299C24.4352 11.1012 25.4286 13.4994 25.4286 16C25.4286 18.5006 24.4352 20.8988 22.667 22.667C20.8988 24.4352 18.5006 25.4286 16 25.4286Z"
                                    fill="white" />
                            </svg>
                            <div id="wp" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                Wordpress (CMS)
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="tw" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0001 8C12.4445 8 10.2223 9.77778 9.33342 13.3333C10.6667 11.5556 12.2223 10.8889 14.0001 11.3333C15.0144 11.5869 15.7394 12.3228 16.5419 13.1373C17.8491 14.4642 19.3621 16 22.6667 16C26.2223 16 28.4445 14.2222 29.3334 10.6667C28.0001 12.4444 26.4445 13.1111 24.6667 12.6667C23.6524 12.4131 22.9274 11.6772 22.125 10.8627C20.8177 9.53575 19.3047 8 16.0001 8ZM9.33342 16C5.77786 16 3.55564 17.7778 2.66675 21.3333C4.00008 19.5556 5.55564 18.8889 7.33341 19.3333C8.34774 19.5869 9.07272 20.3228 9.87519 21.1373C11.1825 22.4642 12.6954 24 16.0001 24C19.5556 24 21.7779 22.2222 22.6667 18.6667C21.3334 20.4444 19.7779 21.1111 18.0001 20.6667C16.9858 20.4131 16.2608 19.6772 15.4583 18.8627C14.151 17.5358 12.6381 16 9.33342 16Z"
                                    fill="url(#paint0_linear_131_266147)" />
                                <defs>
                                    <linearGradient id="paint0_linear_131_266147" x1="1.92601" y1="13.12"
                                        x2="24.957" y2="26.3992" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2298BD" />
                                        <stop offset="1" stop-color="#0ED7B5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div id="tw" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                TailwindCSS (Styling)
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="html" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.4461 7.90723L23.725 27.1884L15.9883 29.3333L8.27303 27.1914L6.55371 7.90723H25.4461Z"
                                    fill="#E44D26" />
                                <path d="M16 27.6937L22.2516 25.9606L23.7224 9.48389H16V27.6937Z" fill="#F16529" />
                                <path
                                    d="M16 14.2143H12.6541L12.8703 16.6362H16V19.0013H10.7073L10.0693 11.8491H16V14.2143Z"
                                    fill="#EBEBEB" />
                                <path
                                    d="M10.813 20.1839H13.1872L13.3556 22.0702L15.9897 22.7815L16 22.7787V25.2394L15.9891 25.2425L11.1443 23.8975L10.813 20.1839Z"
                                    fill="#EBEBEB" />
                                <path
                                    d="M9.5134 2.6665H8.31152V6.26255H9.51345V5.05838H10.6129V6.26255H11.8149V2.6665H10.6129V3.854H9.5134V2.6665Z"
                                    fill="black" />
                                <path
                                    d="M12.3373 3.859H13.3954L13.3955 6.26255H14.5975V3.859H15.656V2.6665H12.3373V3.859Z"
                                    fill="black" />
                                <path
                                    d="M16.1828 2.6665H17.436L18.207 3.93005L18.9771 2.6665H20.2309V6.26255H19.0339V4.48015L18.207 5.75874H18.1863L17.3588 4.48015V6.26255H16.1828V2.6665Z"
                                    fill="black" />
                                <path d="M22.0314 2.6665H20.8291V6.26255H23.7216V5.0739H22.0314V2.6665Z"
                                    fill="black" />
                                <path d="M15.9917 14.2143V11.8491H21.9164L21.7046 14.2143H15.9917Z" fill="white" />
                                <path
                                    d="M18.9041 19.0013H15.9917V16.6362H21.4894L21.4317 17.2713L20.8403 23.8975L15.9917 25.2413V22.7807L18.6296 22.0687L18.9041 19.0013Z"
                                    fill="white" />
                            </svg>
                            <div id="html" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                HTML 5
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="css" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.9897 28.0002L9.04593 26.0726L7.49854 8.7168H24.5017L22.9527 26.0699L15.9897 28.0002Z"
                                    fill="#264DE4" />
                                <path d="M21.6264 24.9647L22.9502 10.1357H16V26.5246L21.6264 24.9647Z" fill="#2965F1" />
                                <path d="M11.0459 16.5728L11.2367 18.7013H16.0001V16.5728H11.0459Z" fill="#EBEBEB" />
                                <path d="M10.6626 12.2642L10.8561 14.3928H16.0002V12.2642H10.6626Z" fill="#EBEBEB" />
                                <path
                                    d="M16.0001 22.1009L15.9908 22.1034L13.6201 21.4633L13.4686 19.7656H11.3318L11.63 23.1079L15.9903 24.3183L16.0001 24.3156V22.1009Z"
                                    fill="#EBEBEB" />
                                <path d="M11.5 4H14.0781V5.07813H12.5781V6.15625H14.0781V7.23438H11.5V4Z"
                                    fill="black" />
                                <path
                                    d="M14.5938 4H17.1719V4.9375H15.6719V5.125H17.1719V7.28125H14.5938V6.29688H16.0937V6.10938H14.5938V4Z"
                                    fill="black" />
                                <path
                                    d="M17.6875 4H20.2656V4.9375H18.7656V5.125H20.2656V7.28125H17.6875V6.29688H19.1875V6.10938H17.6875V4Z"
                                    fill="black" />
                                <path
                                    d="M20.9406 16.5725L21.3249 12.2642H15.9927V14.3928H18.9921L18.7984 16.5725H15.9927V18.7011H18.6138L18.3668 21.4618L15.9927 22.1026V24.3171L20.3565 23.1077L20.3885 22.7481L20.8887 17.1441L20.9406 16.5725Z"
                                    fill="white" />
                            </svg>
                            <div id="css" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                CSS 3
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="js" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4" y="4" width="24" height="24" fill="#FFCA28" />
                                <path
                                    d="M18.5714 23.9609L20.3385 22.7916C20.4769 23.2267 21.3538 24.26 22.4615 24.26C23.5692 24.26 24.0835 23.655 24.0835 23.2539C24.0835 22.1609 22.9524 21.7755 22.4092 21.5904C22.3206 21.5602 22.2477 21.5354 22.1978 21.5137C22.1722 21.5025 22.1336 21.4877 22.0839 21.4688C21.4797 21.2379 19.2506 20.3863 19.2506 17.9176C19.2506 15.1984 21.8747 14.8857 22.4681 14.8857C22.8564 14.8857 24.7231 14.9333 25.6527 16.6804L23.9385 17.8768C23.5626 17.1154 22.9382 16.8639 22.5538 16.8639C21.6044 16.8639 21.4066 17.56 21.4066 17.8768C21.4066 18.7658 22.4381 19.1643 23.3091 19.5008C23.537 19.5888 23.7539 19.6726 23.9385 19.7598C24.8879 20.2085 26.2857 20.9426 26.2857 23.2539C26.2857 24.4115 25.3147 26.2857 22.8703 26.2857C19.5868 26.2857 18.7165 24.3144 18.5714 23.9609Z"
                                    fill="#3E3E3E" />
                                <path
                                    d="M10 24.1931L11.8417 23.0244C11.986 23.4593 12.5468 24.261 13.3605 24.261C14.1741 24.261 14.5906 23.4253 14.5906 23.0244V15.1429H16.8556V23.0244C16.8923 24.1115 16.2893 26.2857 13.6285 26.2857C11.182 26.2857 10.1649 24.8317 10 24.1931Z"
                                    fill="#3E3E3E" />
                            </svg>
                            <div id="js" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                Javascript
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                    </div>
                    <a href="#projects"
                        class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium rounded-lg group bg-gradient-to-br from-primary-600 to-primary-300 group-hover:from-primary-600 group-hover:to-primary-400 hover:text-primary-50 text-primary-50 focus:ring-4 focus:outline-none focus:ring-primary-200 dark:focus:ring-primary-800 cursor-pointer">
                        <span
                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-primary-950 rounded-md group-hover:bg-opacity-0 flex gap-2 justify-center items-center uppercase">
                            View Case Study <div><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                </svg>
                            </div>
                        </span>
                    </a>
                </div>
            </div>
            {{-- Project Card --}}
            <div class="max-w-sm bg-primary-950 border-primary-300 border-2 rounded-lg shadow-md overflow-hidden">
                <a target="_blank" href="https://project1.alfaruqy.me">
                    <img class="rounded-t-md" src={{ asset('images/project-snapshot.png') }} alt="" />
                </a>
                <div class="p-5 flex flex-col items-start">
                    <a target="_blank" href="https://project1.alfaruqy.me">
                        <h3 class="mb-2 text-2xl font-bold tracking-tight text-primary-50">
                            Insan Aulia Primary School Website</h3>
                    </a>
                    <a target="_blank" href="https://project1.alfaruqy.me"
                        class="inline-flex items-center gap-1 font-medium text-primary-500 transition-all hover:underline bg-primary-50 px-4 rounded-lg my-2">
                        insanaulia.sch.id
                        <svg class="w-4 h-4 text-primary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
                        </svg>

                    </a>
                    <p class="mb-3 font-normal text-primary-300">School website that serve as marketing tool
                        for
                        potential parent to attract them for register their children and informational website
                        for student about current news and activities on the school.</p>
                    {{-- Tech stacks used in a project --}}
                    <div class="mt-2 mb-4 flex justify-center items-center gap-0.5">
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="wp2" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28 16C28 22.6274 22.6274 28 16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z"
                                    fill="#028CB0" />
                                <path
                                    d="M7.8189 16C7.8189 19.242 9.70462 22.0343 12.4316 23.3615L8.52967 12.671C8.06113 13.7183 7.81892 14.8527 7.8189 16ZM16 24.1811C16.9501 24.1811 17.864 24.0143 18.7198 23.7169L18.6618 23.6081L16.1451 16.718L13.6936 23.8475C14.4189 24.0651 15.1949 24.1811 16 24.1811ZM17.1242 12.1633L20.0833 20.9609L20.9029 18.2338C21.251 17.1024 21.5193 16.2901 21.5193 15.5866C21.5193 14.5712 21.1567 13.8749 20.8521 13.3382C20.4314 12.6565 20.047 12.0835 20.047 11.4163C20.047 10.662 20.6127 9.96571 21.4251 9.96571H21.5266C20.0191 8.58183 18.0464 7.81549 16 7.8189C14.6451 7.81865 13.3113 8.15523 12.1187 8.79837C10.9261 9.4415 9.91211 10.371 9.16791 11.5033L9.69011 11.5178C10.5459 11.5178 11.8659 11.409 11.8659 11.409C12.3156 11.3873 12.3664 12.0327 11.924 12.0835C11.924 12.0835 11.4815 12.1415 10.9811 12.1633L13.9692 21.0262L15.7607 15.6591L14.4842 12.1633C14.1983 12.1475 13.9129 12.1233 13.6284 12.0908C13.1859 12.0618 13.2367 11.3873 13.6791 11.409C13.6791 11.409 15.0281 11.5178 15.8332 11.5178C16.689 11.5178 18.009 11.409 18.009 11.409C18.4514 11.3873 18.5095 12.0327 18.067 12.0835C18.067 12.0835 17.6246 12.1343 17.1242 12.1633ZM20.1123 23.0714C21.3499 22.3518 22.3771 21.32 23.0911 20.0791C23.8051 18.8382 24.1809 17.4316 24.1811 16C24.1811 14.5785 23.8185 13.244 23.1802 12.0763C23.3098 13.3609 23.1153 14.6576 22.6145 15.8477L20.1123 23.0714ZM16 25.4286C13.4994 25.4286 11.1012 24.4352 9.33299 22.667C7.56479 20.8988 6.57143 18.5006 6.57143 16C6.57143 13.4994 7.56479 11.1012 9.33299 9.33299C11.1012 7.56479 13.4994 6.57143 16 6.57143C18.5006 6.57143 20.8988 7.56479 22.667 9.33299C24.4352 11.1012 25.4286 13.4994 25.4286 16C25.4286 18.5006 24.4352 20.8988 22.667 22.667C20.8988 24.4352 18.5006 25.4286 16 25.4286Z"
                                    fill="white" />
                            </svg>
                            <div id="wp2" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                Wordpress (CMS)
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="tw2" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0001 8C12.4445 8 10.2223 9.77778 9.33342 13.3333C10.6667 11.5556 12.2223 10.8889 14.0001 11.3333C15.0144 11.5869 15.7394 12.3228 16.5419 13.1373C17.8491 14.4642 19.3621 16 22.6667 16C26.2223 16 28.4445 14.2222 29.3334 10.6667C28.0001 12.4444 26.4445 13.1111 24.6667 12.6667C23.6524 12.4131 22.9274 11.6772 22.125 10.8627C20.8177 9.53575 19.3047 8 16.0001 8ZM9.33342 16C5.77786 16 3.55564 17.7778 2.66675 21.3333C4.00008 19.5556 5.55564 18.8889 7.33341 19.3333C8.34774 19.5869 9.07272 20.3228 9.87519 21.1373C11.1825 22.4642 12.6954 24 16.0001 24C19.5556 24 21.7779 22.2222 22.6667 18.6667C21.3334 20.4444 19.7779 21.1111 18.0001 20.6667C16.9858 20.4131 16.2608 19.6772 15.4583 18.8627C14.151 17.5358 12.6381 16 9.33342 16Z"
                                    fill="url(#paint0_linear_131_266147)" />
                                <defs>
                                    <linearGradient id="paint0_linear_131_266147" x1="1.92601" y1="13.12"
                                        x2="24.957" y2="26.3992" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2298BD" />
                                        <stop offset="1" stop-color="#0ED7B5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div id="tw2" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                TailwindCSS (Styling)
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="html2" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.4461 7.90723L23.725 27.1884L15.9883 29.3333L8.27303 27.1914L6.55371 7.90723H25.4461Z"
                                    fill="#E44D26" />
                                <path d="M16 27.6937L22.2516 25.9606L23.7224 9.48389H16V27.6937Z" fill="#F16529" />
                                <path
                                    d="M16 14.2143H12.6541L12.8703 16.6362H16V19.0013H10.7073L10.0693 11.8491H16V14.2143Z"
                                    fill="#EBEBEB" />
                                <path
                                    d="M10.813 20.1839H13.1872L13.3556 22.0702L15.9897 22.7815L16 22.7787V25.2394L15.9891 25.2425L11.1443 23.8975L10.813 20.1839Z"
                                    fill="#EBEBEB" />
                                <path
                                    d="M9.5134 2.6665H8.31152V6.26255H9.51345V5.05838H10.6129V6.26255H11.8149V2.6665H10.6129V3.854H9.5134V2.6665Z"
                                    fill="black" />
                                <path
                                    d="M12.3373 3.859H13.3954L13.3955 6.26255H14.5975V3.859H15.656V2.6665H12.3373V3.859Z"
                                    fill="black" />
                                <path
                                    d="M16.1828 2.6665H17.436L18.207 3.93005L18.9771 2.6665H20.2309V6.26255H19.0339V4.48015L18.207 5.75874H18.1863L17.3588 4.48015V6.26255H16.1828V2.6665Z"
                                    fill="black" />
                                <path d="M22.0314 2.6665H20.8291V6.26255H23.7216V5.0739H22.0314V2.6665Z"
                                    fill="black" />
                                <path d="M15.9917 14.2143V11.8491H21.9164L21.7046 14.2143H15.9917Z" fill="white" />
                                <path
                                    d="M18.9041 19.0013H15.9917V16.6362H21.4894L21.4317 17.2713L20.8403 23.8975L15.9917 25.2413V22.7807L18.6296 22.0687L18.9041 19.0013Z"
                                    fill="white" />
                            </svg>
                            <div id="html2" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                HTML 5
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="css2" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.9897 28.0002L9.04593 26.0726L7.49854 8.7168H24.5017L22.9527 26.0699L15.9897 28.0002Z"
                                    fill="#264DE4" />
                                <path d="M21.6264 24.9647L22.9502 10.1357H16V26.5246L21.6264 24.9647Z"
                                    fill="#2965F1" />
                                <path d="M11.0459 16.5728L11.2367 18.7013H16.0001V16.5728H11.0459Z" fill="#EBEBEB" />
                                <path d="M10.6626 12.2642L10.8561 14.3928H16.0002V12.2642H10.6626Z" fill="#EBEBEB" />
                                <path
                                    d="M16.0001 22.1009L15.9908 22.1034L13.6201 21.4633L13.4686 19.7656H11.3318L11.63 23.1079L15.9903 24.3183L16.0001 24.3156V22.1009Z"
                                    fill="#EBEBEB" />
                                <path d="M11.5 4H14.0781V5.07813H12.5781V6.15625H14.0781V7.23438H11.5V4Z"
                                    fill="black" />
                                <path
                                    d="M14.5938 4H17.1719V4.9375H15.6719V5.125H17.1719V7.28125H14.5938V6.29688H16.0937V6.10938H14.5938V4Z"
                                    fill="black" />
                                <path
                                    d="M17.6875 4H20.2656V4.9375H18.7656V5.125H20.2656V7.28125H17.6875V6.29688H19.1875V6.10938H17.6875V4Z"
                                    fill="black" />
                                <path
                                    d="M20.9406 16.5725L21.3249 12.2642H15.9927V14.3928H18.9921L18.7984 16.5725H15.9927V18.7011H18.6138L18.3668 21.4618L15.9927 22.1026V24.3171L20.3565 23.1077L20.3885 22.7481L20.8887 17.1441L20.9406 16.5725Z"
                                    fill="white" />
                            </svg>
                            <div id="css2" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                CSS 3
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="js2" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4" y="4" width="24" height="24" fill="#FFCA28" />
                                <path
                                    d="M18.5714 23.9609L20.3385 22.7916C20.4769 23.2267 21.3538 24.26 22.4615 24.26C23.5692 24.26 24.0835 23.655 24.0835 23.2539C24.0835 22.1609 22.9524 21.7755 22.4092 21.5904C22.3206 21.5602 22.2477 21.5354 22.1978 21.5137C22.1722 21.5025 22.1336 21.4877 22.0839 21.4688C21.4797 21.2379 19.2506 20.3863 19.2506 17.9176C19.2506 15.1984 21.8747 14.8857 22.4681 14.8857C22.8564 14.8857 24.7231 14.9333 25.6527 16.6804L23.9385 17.8768C23.5626 17.1154 22.9382 16.8639 22.5538 16.8639C21.6044 16.8639 21.4066 17.56 21.4066 17.8768C21.4066 18.7658 22.4381 19.1643 23.3091 19.5008C23.537 19.5888 23.7539 19.6726 23.9385 19.7598C24.8879 20.2085 26.2857 20.9426 26.2857 23.2539C26.2857 24.4115 25.3147 26.2857 22.8703 26.2857C19.5868 26.2857 18.7165 24.3144 18.5714 23.9609Z"
                                    fill="#3E3E3E" />
                                <path
                                    d="M10 24.1931L11.8417 23.0244C11.986 23.4593 12.5468 24.261 13.3605 24.261C14.1741 24.261 14.5906 23.4253 14.5906 23.0244V15.1429H16.8556V23.0244C16.8923 24.1115 16.2893 26.2857 13.6285 26.2857C11.182 26.2857 10.1649 24.8317 10 24.1931Z"
                                    fill="#3E3E3E" />
                            </svg>
                            <div id="js2" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                Javascript
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                    </div>
                    <a href="#projects"
                        class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium rounded-lg group bg-gradient-to-br from-primary-600 to-primary-300 group-hover:from-primary-600 group-hover:to-primary-400 hover:text-primary-50 text-primary-50 focus:ring-4 focus:outline-none focus:ring-primary-200 dark:focus:ring-primary-800 cursor-pointer">
                        <span
                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-primary-950 rounded-md group-hover:bg-opacity-0 flex gap-2 justify-center items-center uppercase">
                            View Case Study <div><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                </svg>
                            </div>
                        </span>
                    </a>
                </div>
            </div>
            {{-- Project Card --}}
            <div class="max-w-sm bg-primary-950 border-primary-300 border-2 rounded-lg shadow-md overflow-hidden">
                <a target="_blank" href="https://project1.alfaruqy.me">
                    <img class="rounded-t-md" src={{ asset('images/project-snapshot.png') }} alt="" />
                </a>
                <div class="p-5 flex flex-col items-start">
                    <a target="_blank" href="https://project1.alfaruqy.me">
                        <h3 class="mb-2 text-2xl font-bold tracking-tight text-primary-50">
                            Insan Aulia Primary School Website</h3>
                    </a>
                    <a target="_blank" href="https://project1.alfaruqy.me"
                        class="inline-flex items-center gap-1 font-medium text-primary-500 transition-all hover:underline bg-primary-50 px-4 rounded-lg my-2">
                        insanaulia.sch.id
                        <svg class="w-4 h-4 text-primary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
                        </svg>

                    </a>
                    <p class="mb-3 font-normal text-primary-300">School website that serve as marketing tool
                        for
                        potential parent to attract them for register their children and informational website
                        for student about current news and activities on the school.</p>
                    {{-- Tech stacks used in a project --}}
                    <div class="mt-2 mb-4 flex justify-center items-center gap-0.5">
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="wp3" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28 16C28 22.6274 22.6274 28 16 28C9.37258 28 4 22.6274 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z"
                                    fill="#028CB0" />
                                <path
                                    d="M7.8189 16C7.8189 19.242 9.70462 22.0343 12.4316 23.3615L8.52967 12.671C8.06113 13.7183 7.81892 14.8527 7.8189 16ZM16 24.1811C16.9501 24.1811 17.864 24.0143 18.7198 23.7169L18.6618 23.6081L16.1451 16.718L13.6936 23.8475C14.4189 24.0651 15.1949 24.1811 16 24.1811ZM17.1242 12.1633L20.0833 20.9609L20.9029 18.2338C21.251 17.1024 21.5193 16.2901 21.5193 15.5866C21.5193 14.5712 21.1567 13.8749 20.8521 13.3382C20.4314 12.6565 20.047 12.0835 20.047 11.4163C20.047 10.662 20.6127 9.96571 21.4251 9.96571H21.5266C20.0191 8.58183 18.0464 7.81549 16 7.8189C14.6451 7.81865 13.3113 8.15523 12.1187 8.79837C10.9261 9.4415 9.91211 10.371 9.16791 11.5033L9.69011 11.5178C10.5459 11.5178 11.8659 11.409 11.8659 11.409C12.3156 11.3873 12.3664 12.0327 11.924 12.0835C11.924 12.0835 11.4815 12.1415 10.9811 12.1633L13.9692 21.0262L15.7607 15.6591L14.4842 12.1633C14.1983 12.1475 13.9129 12.1233 13.6284 12.0908C13.1859 12.0618 13.2367 11.3873 13.6791 11.409C13.6791 11.409 15.0281 11.5178 15.8332 11.5178C16.689 11.5178 18.009 11.409 18.009 11.409C18.4514 11.3873 18.5095 12.0327 18.067 12.0835C18.067 12.0835 17.6246 12.1343 17.1242 12.1633ZM20.1123 23.0714C21.3499 22.3518 22.3771 21.32 23.0911 20.0791C23.8051 18.8382 24.1809 17.4316 24.1811 16C24.1811 14.5785 23.8185 13.244 23.1802 12.0763C23.3098 13.3609 23.1153 14.6576 22.6145 15.8477L20.1123 23.0714ZM16 25.4286C13.4994 25.4286 11.1012 24.4352 9.33299 22.667C7.56479 20.8988 6.57143 18.5006 6.57143 16C6.57143 13.4994 7.56479 11.1012 9.33299 9.33299C11.1012 7.56479 13.4994 6.57143 16 6.57143C18.5006 6.57143 20.8988 7.56479 22.667 9.33299C24.4352 11.1012 25.4286 13.4994 25.4286 16C25.4286 18.5006 24.4352 20.8988 22.667 22.667C20.8988 24.4352 18.5006 25.4286 16 25.4286Z"
                                    fill="white" />
                            </svg>
                            <div id="wp3" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                Wordpress (CMS)
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="tw3" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0001 8C12.4445 8 10.2223 9.77778 9.33342 13.3333C10.6667 11.5556 12.2223 10.8889 14.0001 11.3333C15.0144 11.5869 15.7394 12.3228 16.5419 13.1373C17.8491 14.4642 19.3621 16 22.6667 16C26.2223 16 28.4445 14.2222 29.3334 10.6667C28.0001 12.4444 26.4445 13.1111 24.6667 12.6667C23.6524 12.4131 22.9274 11.6772 22.125 10.8627C20.8177 9.53575 19.3047 8 16.0001 8ZM9.33342 16C5.77786 16 3.55564 17.7778 2.66675 21.3333C4.00008 19.5556 5.55564 18.8889 7.33341 19.3333C8.34774 19.5869 9.07272 20.3228 9.87519 21.1373C11.1825 22.4642 12.6954 24 16.0001 24C19.5556 24 21.7779 22.2222 22.6667 18.6667C21.3334 20.4444 19.7779 21.1111 18.0001 20.6667C16.9858 20.4131 16.2608 19.6772 15.4583 18.8627C14.151 17.5358 12.6381 16 9.33342 16Z"
                                    fill="url(#paint0_linear_131_266147)" />
                                <defs>
                                    <linearGradient id="paint0_linear_131_266147" x1="1.92601" y1="13.12"
                                        x2="24.957" y2="26.3992" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2298BD" />
                                        <stop offset="1" stop-color="#0ED7B5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div id="tw3" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                TailwindCSS (Styling)
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="html3" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.4461 7.90723L23.725 27.1884L15.9883 29.3333L8.27303 27.1914L6.55371 7.90723H25.4461Z"
                                    fill="#E44D26" />
                                <path d="M16 27.6937L22.2516 25.9606L23.7224 9.48389H16V27.6937Z" fill="#F16529" />
                                <path
                                    d="M16 14.2143H12.6541L12.8703 16.6362H16V19.0013H10.7073L10.0693 11.8491H16V14.2143Z"
                                    fill="#EBEBEB" />
                                <path
                                    d="M10.813 20.1839H13.1872L13.3556 22.0702L15.9897 22.7815L16 22.7787V25.2394L15.9891 25.2425L11.1443 23.8975L10.813 20.1839Z"
                                    fill="#EBEBEB" />
                                <path
                                    d="M9.5134 2.6665H8.31152V6.26255H9.51345V5.05838H10.6129V6.26255H11.8149V2.6665H10.6129V3.854H9.5134V2.6665Z"
                                    fill="black" />
                                <path
                                    d="M12.3373 3.859H13.3954L13.3955 6.26255H14.5975V3.859H15.656V2.6665H12.3373V3.859Z"
                                    fill="black" />
                                <path
                                    d="M16.1828 2.6665H17.436L18.207 3.93005L18.9771 2.6665H20.2309V6.26255H19.0339V4.48015L18.207 5.75874H18.1863L17.3588 4.48015V6.26255H16.1828V2.6665Z"
                                    fill="black" />
                                <path d="M22.0314 2.6665H20.8291V6.26255H23.7216V5.0739H22.0314V2.6665Z"
                                    fill="black" />
                                <path d="M15.9917 14.2143V11.8491H21.9164L21.7046 14.2143H15.9917Z" fill="white" />
                                <path
                                    d="M18.9041 19.0013H15.9917V16.6362H21.4894L21.4317 17.2713L20.8403 23.8975L15.9917 25.2413V22.7807L18.6296 22.0687L18.9041 19.0013Z"
                                    fill="white" />
                            </svg>
                            <div id="html3" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                HTML 5
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="css3" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.9897 28.0002L9.04593 26.0726L7.49854 8.7168H24.5017L22.9527 26.0699L15.9897 28.0002Z"
                                    fill="#264DE4" />
                                <path d="M21.6264 24.9647L22.9502 10.1357H16V26.5246L21.6264 24.9647Z"
                                    fill="#2965F1" />
                                <path d="M11.0459 16.5728L11.2367 18.7013H16.0001V16.5728H11.0459Z" fill="#EBEBEB" />
                                <path d="M10.6626 12.2642L10.8561 14.3928H16.0002V12.2642H10.6626Z" fill="#EBEBEB" />
                                <path
                                    d="M16.0001 22.1009L15.9908 22.1034L13.6201 21.4633L13.4686 19.7656H11.3318L11.63 23.1079L15.9903 24.3183L16.0001 24.3156V22.1009Z"
                                    fill="#EBEBEB" />
                                <path d="M11.5 4H14.0781V5.07813H12.5781V6.15625H14.0781V7.23438H11.5V4Z"
                                    fill="black" />
                                <path
                                    d="M14.5938 4H17.1719V4.9375H15.6719V5.125H17.1719V7.28125H14.5938V6.29688H16.0937V6.10938H14.5938V4Z"
                                    fill="black" />
                                <path
                                    d="M17.6875 4H20.2656V4.9375H18.7656V5.125H20.2656V7.28125H17.6875V6.29688H19.1875V6.10938H17.6875V4Z"
                                    fill="black" />
                                <path
                                    d="M20.9406 16.5725L21.3249 12.2642H15.9927V14.3928H18.9921L18.7984 16.5725H15.9927V18.7011H18.6138L18.3668 21.4618L15.9927 22.1026V24.3171L20.3565 23.1077L20.3885 22.7481L20.8887 17.1441L20.9406 16.5725Z"
                                    fill="white" />
                            </svg>
                            <div id="css3" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                CSS 3
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full flex justify-center items-center transition-all hover:bg-primary-900">
                            <svg data-tooltip-target="js3" width="32" height="32" viewBox="0 0 32 32"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4" y="4" width="24" height="24" fill="#FFCA28" />
                                <path
                                    d="M18.5714 23.9609L20.3385 22.7916C20.4769 23.2267 21.3538 24.26 22.4615 24.26C23.5692 24.26 24.0835 23.655 24.0835 23.2539C24.0835 22.1609 22.9524 21.7755 22.4092 21.5904C22.3206 21.5602 22.2477 21.5354 22.1978 21.5137C22.1722 21.5025 22.1336 21.4877 22.0839 21.4688C21.4797 21.2379 19.2506 20.3863 19.2506 17.9176C19.2506 15.1984 21.8747 14.8857 22.4681 14.8857C22.8564 14.8857 24.7231 14.9333 25.6527 16.6804L23.9385 17.8768C23.5626 17.1154 22.9382 16.8639 22.5538 16.8639C21.6044 16.8639 21.4066 17.56 21.4066 17.8768C21.4066 18.7658 22.4381 19.1643 23.3091 19.5008C23.537 19.5888 23.7539 19.6726 23.9385 19.7598C24.8879 20.2085 26.2857 20.9426 26.2857 23.2539C26.2857 24.4115 25.3147 26.2857 22.8703 26.2857C19.5868 26.2857 18.7165 24.3144 18.5714 23.9609Z"
                                    fill="#3E3E3E" />
                                <path
                                    d="M10 24.1931L11.8417 23.0244C11.986 23.4593 12.5468 24.261 13.3605 24.261C14.1741 24.261 14.5906 23.4253 14.5906 23.0244V15.1429H16.8556V23.0244C16.8923 24.1115 16.2893 26.2857 13.6285 26.2857C11.182 26.2857 10.1649 24.8317 10 24.1931Z"
                                    fill="#3E3E3E" />
                            </svg>
                            <div id="js3" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-primary-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-primary-700">
                                Javascript
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                    </div>
                    <a href="#projects"
                        class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium rounded-lg group bg-gradient-to-br from-primary-600 to-primary-300 group-hover:from-primary-600 group-hover:to-primary-400 hover:text-primary-50 text-primary-50 focus:ring-4 focus:outline-none focus:ring-primary-200 dark:focus:ring-primary-800 cursor-pointer">
                        <span
                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-primary-950 rounded-md group-hover:bg-opacity-0 flex gap-2 justify-center items-center uppercase">
                            View Case Study <div><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                </svg>
                            </div>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-partial.section>
