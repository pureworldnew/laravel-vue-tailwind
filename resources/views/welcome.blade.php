<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
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
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
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
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
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
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="header_area">
            <div class="max-w-full">
                <div class="flex md:justify-between py-2.5 2xl:px-64 xl:px-44 mx-auto sm:px-6 lg:px-8 shadow-md">
                    <img src="{{ URL::asset('/img/logo.png') }}" alt="profile Pic" height="200" width="200">
                    <p id="hamburgerbtn" class="md:hidden bg-purple-800">
                        menu
                    </p>
                    <ul class="hidden md:flex md:flex-row self-center" id="mobileMenu">
                        <li class="pr-9">
                            <a class="hover:text-product-red-600 uppercase font-semibold text-base" href="#">Home</a>
                        </li>
                        <li class="pr-9">
                            <a class="hover:text-product-red-600 uppercase font-semibold text-base" href="#">All
                                products</a>
                        </li>
                        <li class="pr-9">
                            <a class="hover:text-product-red-600 uppercase font-semibold text-base" href="#">About
                                us</a>
                        </li>
                        <li class="">
                            <a class="hover:text-product-red-600 uppercase font-semibold text-base" href="#">contact
                                us</a>
                        </li>
                    </ul>
                </div>
                <div class="bg-category-back-500 md:justify-between 2xl:px-64 xl:px-44 sm:px-6 lg:px-8">
                    <div class="flex justify-between py-9">
                        <div class="text-3xl tracking-wider uppercase text-black font-semibold">categories</div>
                        <div class="flex flex-row justify-center items-center">
                            <hr class="pl-3 border-t border-solid w-8 border-red-400" />
                            <div class="pl-3 text-custom-red-400 tracking-normal text-sm"><a href="">See More</a></div>
                            <i class="fas fa-angle-right pl-3 text-custom-red-400"></i>
                        </div>
                    </div>

                    <div class="grid gap-10 grid-cols-1 md:grid-cols-2 2xl:grid-cols-4 pb-10">
                        @for ($i = 1; $i < 9; $i++)
                            <div class="flex flex-col">
                                <img src="{{ URL::asset('/img/' . $i . '.png') }}" class="w-full mb-4" />
                                <div class="flex flex-row justify-start items-center mb-3.5">
                                    <img src="{{ URL::asset('/img/disc.png') }}" class="w-4 h-4 mr-4" />
                                    <div class="font-semibold text-category-title-600 text-lg">Utility Trailer</div>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <div class="text-sm	text-category-subtitle-600 font-semibold">343 Products</div>
                                    <input class="bg-custombtn-red-400 text-sm text-white rounded-full w-20"
                                        type="button" value="View all" />
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="md:justify-between 2xl:px-64 xl:px-44 sm:px-6 lg:px-8">
                    <div class="flex justify-between py-9">
                        <div class="text-3xl tracking-wider uppercase text-black font-semibold">latest products</div>
                        <div class="flex flex-row justify-center items-center">
                            <hr class="pl-3 border-t border-solid w-8 border-red-400" />
                            <div class="pl-3 text-custom-red-400 tracking-normal text-sm h-7"><a href="">View all</a>
                            </div>
                            <i class="fas fa-angle-right pl-3 text-custom-red-400"></i>
                        </div>
                    </div>

                    <div class="grid gap-10 grid-cols-1 md:grid-cols-2 lg:grid-cols-4 2xl:grid-cols-6 pb-10">
                        @for ($i = 0; $i < 12; $i++)
                            <div class="flex flex-col">
                                <img src="{{ URL::asset('/img/product.png') }}" class="w-full mb-4" />
                                <div
                                    class="flex flex-col justify-start font-semibold text-category-title-600 text-base pb-3">
                                    <div class="">2020 RawMaxx</div>
                                    <div class="">12x83 Dump Trailer</div>
                                </div>
                                <div class="flex flex-row justify-start">
                                    <input
                                        class="text-product-red-600 text-xs rounded-full w-24 border-2 h-7 bg-white border-solid border-view-details-600"
                                        type="button" value="View details" />
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="flex md:justify-between 2xl:px-64 xl:px-44 sm:px-6 lg:px-8 bg-apply-part py-16">
                    <div class="flex flex-col justify-start w-full">
                        <div class="flex flex-wrap md:justify-between">
                            <div class="text-white font-bold text-6xl uppercase font-guurantee pb-8">
                                our gurantee
                            </div>
                            <div class="">
                                <input type="button"
                                    class="uppercase bg-white rounded-l-full text-xl text-black p-4 font-semibold tracking-wide"
                                    value="financing through sheffield" />
                                <input type="button"
                                    class="uppercase bg-product-red-600 rounded-r-full text-xl text-white p-4 font-semibold tracking-wide"
                                    value="apply now" />

                            </div>
                        </div>

                        <div class="text-2xl font-semibold text-white pb-4">Top quality service, guaranteed
                            satisfaction,
                            and peace of mind.</div>
                        <div class="text-yellow-300 text-2xl pb-4">What We Offer: </div>
                        <div class="text-yellow-300 text-2xl pb-8"> Complete HAULING and TRUCK
                            ACCESSORIES</div>

                        <input type="button" value="Read more"
                            class="bg-product-red-600 text-white font-semibold text-xs w-24 h-7 rounded-full" />
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 lg:grid-cols-2 gap-4 2xl:px-64 xl:px-44 sm:px-6 lg:px-8 bg-newsletter-color-400 py-10">
                    <div class="flex flex-row flex-nowrap">
                        <img src="{{ URL::asset('/img/news.png') }}" alt="Newsletter pic" class="pr-6" />
                        <div class="text-sm	text-category-subtitle-600 self-center">
                            <div class="text-xl font-bold pb-5">Get the latest deals and more.</div>
                            <div class="text-sm	text-category-subtitle-600 font-semibold">New releases, special offers,
                                and
                                more.</div>
                        </div>
                    </div>
                    <div class="flex flex-row self-center flex-nowrap w-full justify-start lg:justify-end">
                        <input type="text" placeholder="Your email letter"
                            class="text-sm p-4 text-category-subtitle-600 h-12 w-3/4" />
                        <button type="submit"
                            class="bg-custom-red-400 rounded-r-full flex flex-row flex-nowrap self-center h-12 p-4">
                            <i class="fas fa-envelope-square pr-4 text-white font-light"></i>
                            <div class="text-white self-center">Sign Up</div>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col 2xl:px-64 xl:px-44 sm:px-6 lg:px-8">
                    <div class="py-8 grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 py-9 gap-4">
                            <div class="flex flex-col justify-start">
                                <div class="uppercase font-bold text-black text-lg mb-6">Quick links</div>
                                <div class="uppercase text-sm leading-7 text-footer-color-400 mb-4"><i
                                        class="fas fa-angle-right text-red-400 pr-2"></i>All Inventory
                                </div>
                                <div class="uppercase text-sm leading-7 text-footer-color-400 mb-4"><i
                                        class="fas fa-angle-right text-red-400 pr-2"></i>design a trailer
                                </div>
                                <div class="uppercase text-sm leading-7 text-footer-color-400 mb-4"><i
                                        class="fas fa-angle-right text-red-400 pr-2"></i>apply for credit
                                </div>
                                <div class="uppercase text-sm leading-7 text-footer-color-400"><i
                                        class="fas fa-angle-right text-red-400 pr-2"></i>contact us
                                </div>
                            </div>
                            <div class="flex flex-col justify-start">
                                <div class="uppercase font-bold text-black text-lg mb-6">Open Hours</div>
                                <div class="uppercase text-sm leading-7 text-footer-color-400 mb-4">Mon - Fri
                                </div>
                                <div class="uppercase text-sm leading-7 text-footer-color-400 mb-4">08:00 AM - 06:00 PM
                                </div>
                                <div class="uppercase text-sm leading-7 text-footer-color-400 mb-4">saturday
                                </div>
                                <div class="uppercase text-sm leading-7 text-footer-color-400">08:00 AM - 12:00 PM
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col py-9 2xl:pl-24">
                            <div class="uppercase font-bold text-black text-lg mb-6">Connect</div>
                            <div class="flex flex-row flex-nowrap mb-6">
                                <i class="fab fa-facebook-f mr-8"></i>
                                <i class="fas fa-envelope mr-8"></i>
                                <i class="fab fa-twitter mr-8"></i>
                            </div>
                            <div class="uppercase text-sm leading-7 text-footer-color-400 mb-3">trailer dealer website
                                by
                            </div>
                            <img src="{{ URL::asset('/img/connect.png') }}" alt="connect image" class="mb-2 w-3/4" />
                            <div class="uppercase text-sm leading-7 text-footer-color-400 mb-4">privacy policy</div>
                        </div>
                        <div class="flex flex-col py-9 bg-contact-bc-400 pl-6">
                            <div class="uppercase text-lg text-white font-bold mb-6">Contact Us</div>
                            <div class="uppercase text-sm leading-7 text-white mb-4">1208 north main seminole, TX 79360
                            </div>
                            <div class="flex flex-row">
                                <div
                                    class="bg-product-red-600 rounded-full w-20 h-20 flex justify-center items-center mr-6">
                                    <i class="fa fa-phone text-white" aria-hidden="true"></i>
                                </div>
                                <div class="text-white text-xl font-semibold flex flex-col justify-center items-center">
                                    <div>(432) 758-2265</div>
                                    <div>(432) 847-2999</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="w-full pb-6" />
                    <div class="self-center pb-11">Copyright 2021. All Rights Reserved</div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
