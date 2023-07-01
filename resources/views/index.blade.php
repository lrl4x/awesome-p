@extends('layouts.app')

@section('content')
    <!--Hero-->
    <section>
        <div class="bg-yellow-200 dark:bg-gray-900 flex flex-row items-center justify-center p-3 pt-16  ">
            <div class=" w-[60%]">
                <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    We invest in the world’s potential</h1>
                <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl  xl:px-48 dark:text-gray-400">Here at
                    Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and
                    drive economic growth.</p>
                <a href="#"
                    class="inline-flex  px-5 py-3 text-base font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 dark:bg-blue-700 dark:hover:bg-blue-800  focus:ring-red-300 dark:focus:ring-red-900">
                    Learn more
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>

            <div class="w-[70%] ml-2 flex justify-center h-64">
                <img class="transition duration-300 ease-in-out hover:scale-110"
                    src="https://th.bing.com/th/id/R.3d84231889b856482694ba281d83a662?rik=Hgnw8IAXmk0AuQ&pid=ImgRaw&r=0" class="m-auto" alt="Audi">

            </div>
    </section>
    <!--component-->
    <section class="flex flex-col justify-center items-center bg-yellow-200 dark:bg-gray-900 ">
        <div class="bg-yellow-200 dark:bg-gray-900 flex flex-col items-center p-12">
            <h1 class="font-bold text-2xl text-center text-gray-900 dark:text-white">
                Our Unique & Awesome Core Features
            </h1>
            <p class="text-2xl text-center text-gray-900 dark:text-white">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. In convallis tortor
                eros. Donec vitae tortor lacus.
                Phasellus aliquam ante in maximus.</p>
        </div>

        <div class="bg-yellow-200 dark:bg-gray-900 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 p-12">


            <a
                href="#"class="flex flex-col items-center block max-w-sm p-6 bg-yellow-300 border border-gray-200 rounded-lg shadow hover:bg-yellow-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <svg width="44" height="44" viewBox="0 0 44 44" class="if">
                    <path d="M3.66663 23.8333H14.6666V38.5H3.66663V23.8333ZM16.5 5.5H27.5V38.5H16.5V5.5Z"></path>
                    <path opacity="0.5" d="M29.3333 14.6667H40.3333V38.5H29.3333V14.6667Z"></path>
                </svg>
                <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="text-center font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                    technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>

            <a
                href="#"class="flex flex-col items-center block max-w-sm p-6 bg-yellow-300 border border-gray-200 rounded-lg shadow hover:bg-yellow-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <svg width="44" height="44" viewBox="0 0 44 44" class="if">
                    <path d="M3.66663 23.8333H14.6666V38.5H3.66663V23.8333ZM16.5 5.5H27.5V38.5H16.5V5.5Z"></path>
                    <path opacity="0.5" d="M29.3333 14.6667H40.3333V38.5H29.3333V14.6667Z"></path>
                </svg>
                <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="text-center font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                    technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>

            <a
                href="#"class="flex flex-col items-center block max-w-sm p-6 bg-yellow-300 border border-gray-200 rounded-lg shadow hover:bg-yellow-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <svg width="44" height="44" viewBox="0 0 44 44" class="if">
                    <path d="M3.66663 23.8333H14.6666V38.5H3.66663V23.8333ZM16.5 5.5H27.5V38.5H16.5V5.5Z"></path>
                    <path opacity="0.5" d="M29.3333 14.6667H40.3333V38.5H29.3333V14.6667Z"></path>
                </svg>
                <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="text-center font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                    technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>

            <a
                href="#"class="flex flex-col items-center block max-w-sm p-6 bg-yellow-300 border border-gray-200 rounded-lg shadow hover:bg-yellow-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <svg width="44" height="44" viewBox="0 0 44 44" class="if">
                    <path d="M3.66663 23.8333H14.6666V38.5H3.66663V23.8333ZM16.5 5.5H27.5V38.5H16.5V5.5Z"></path>
                    <path opacity="0.5" d="M29.3333 14.6667H40.3333V38.5H29.3333V14.6667Z"></path>
                </svg>
                <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="text-center font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                    technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>

            <a
                href="#"class="flex flex-col items-center block max-w-sm p-6 bg-yellow-300 border border-gray-200 rounded-lg shadow hover:bg-yellow-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <svg width="44" height="44" viewBox="0 0 44 44" class="if">
                    <path d="M3.66663 23.8333H14.6666V38.5H3.66663V23.8333ZM16.5 5.5H27.5V38.5H16.5V5.5Z"></path>
                    <path opacity="0.5" d="M29.3333 14.6667H40.3333V38.5H29.3333V14.6667Z"></path>
                </svg>
                <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="text-center font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                    technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>

            <a
                href="#"class="flex flex-col items-center block max-w-sm p-6 bg-yellow-300 border border-gray-200 rounded-lg shadow hover:bg-yellow-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <svg width="44" height="44" viewBox="0 0 44 44" class="if">
                    <path d="M3.66663 23.8333H14.6666V38.5H3.66663V23.8333ZM16.5 5.5H27.5V38.5H16.5V5.5Z"></path>
                    <path opacity="0.5" d="M29.3333 14.6667H40.3333V38.5H29.3333V14.6667Z"></path>
                </svg>
                <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="text-center font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                    technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>




        </div>

    </section>
    <!--about web-->
    <section class="bg-yellow-200 dark:bg-gray-900 p-15 ">
        <div class="bg-yellow-200 dark:bg-gray-900 flex flex-col items-center p-12">
            <h1 class="font-bold text-4xl text-center text-gray-900 dark:text-white">
                Know Details About Our Website
            </h1>
            <p class="text-2xl text-center text-gray-00 dark:text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. In convallis tortor
                eros. Donec vitae tortor .
                Phasellus aliquam ante in maximus.</p>


        </div>

        <div class="flex flex-row justify-center items-center text-center">
            <div class="text-center flex flex-col justify-center items-center m-2">
                <div class="bg-yellow-300 dark:bg-gray-500  rounded-lg w-7 flex flex-col justify-center items-center">
                    <svg width="42" height="43" viewBox="0 0 42 43"
                        class="inline-block fill-black dark:fill-white w-6 h-6 hover:scale-125 ">
                        <path
                            d="M13.825 37.9568C10.5 35.0518 9.3625 30.4318 10.815 26.3543L14.5425 15.9768C14.9275 14.9093 16.38 14.7693 16.9575 15.7493L17.5 16.7118C17.92 17.3943 18.0075 18.2343 17.745 18.9868L16.03 23.7818L16.7825 24.4468L27.2125 12.6343C27.825 11.9343 28.875 11.8643 29.5925 12.4768C30.275 13.0893 30.345 14.1568 29.75 14.8393L21.9625 23.6418L22.9775 24.5343L32.515 13.7193C33.1275 13.0193 34.195 12.9493 34.8775 13.5618C35.5775 14.1743 35.6475 15.2593 35 15.9418L25.48 26.7568L26.495 27.6493L34.7025 18.3393C35.315 17.6393 36.3825 17.5693 37.065 18.1818C37.7475 18.7943 37.835 19.8618 37.2225 20.5093L29.015 29.8543L30.0125 30.7468L35.56 24.4643C36.1725 23.7643 37.24 23.6943 37.94 24.3068C38.64 24.9193 38.6925 25.9868 38.08 26.6343L28.98 36.9943C25.06 41.4568 18.27 41.8768 13.825 37.9568ZM20.2825 16.5193L25.2525 10.8843C25.6725 10.4118 26.1975 10.0093 26.775 9.78177L27.44 8.41677C27.86 7.59427 27.51 6.57927 26.67 6.17677C25.8475 5.77427 24.8325 6.12427 24.43 6.94677L20.0375 15.9418C20.125 16.1343 20.23 16.3268 20.2825 16.5193ZM19.25 14.3843V14.4718L24.115 4.54927C24.5 3.70927 24.1675 2.71177 23.3275 2.30927C22.505 1.89802 21.49 2.23927 21.0875 3.07927L16.4675 12.5468C17.605 12.7393 18.6025 13.3868 19.25 14.3843ZM8.3475 25.4618L12.075 15.0843C12.5475 13.7718 13.65 12.8793 14.9625 12.5818L18.7075 4.89927C19.11 4.05927 18.76 3.06177 17.9375 2.65927C17.0975 2.25677 16.1 2.58927 15.6975 3.42927L8.75 17.6043L7.875 17.1668L8.2425 12.0743C8.3125 11.2868 7.9975 10.4993 7.4375 9.93927L6.6325 9.13427C5.81 8.38177 4.4625 8.88927 4.375 10.0093L3.5 21.0168C3.2725 24.5868 4.8475 27.9993 7.6125 30.1343C7.5775 28.5943 7.805 27.0018 8.3475 25.4618Z">
                        </path>
                    </svg>
                </div>
                <h3 class=" text-gray-900 dark:text-white pt-2">
                    About Us
                </h3>
                <p class=" text-gray-900 dark:text-white  pt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Minus, architecto?
                </p>
            </div>

            <div class="text-center flex flex-col justify-center items-center m-2">
                <div class="bg-yellow-300 dark:bg-gray-500  rounded-lg w-7 flex flex-col justify-center items-center">
                    <svg width="42" height="43" viewBox="0 0 42 43"
                        class="w-6 h-6 fill-black dark:fill-white hover:scale-125">
                        <path
                            d="M21 7.38428C22.8565 7.38428 24.637 8.12177 25.9497 9.43453C27.2625 10.7473 28 12.5278 28 14.3843C28 16.2408 27.2625 18.0213 25.9497 19.334C24.637 20.6468 22.8565 21.3843 21 21.3843C19.1435 21.3843 17.363 20.6468 16.0503 19.334C14.7375 18.0213 14 16.2408 14 14.3843C14 12.5278 14.7375 10.7473 16.0503 9.43453C17.363 8.12177 19.1435 7.38428 21 7.38428ZM21 24.8843C28.735 24.8843 35 28.0168 35 31.8843V35.3843H7V31.8843C7 28.0168 13.265 24.8843 21 24.8843Z">
                        </path>
                    </svg>
                </div>
                <h3 class=" text-gray-900 dark:text-white pt-2">
                    Open an Account
                </h3>
                <p class=" text-gray-900 dark:text-white  pt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Minus, architecto?
                </p>
            </div>

            <div class="text-center flex flex-col justify-center items-center m-2">
                <div class="bg-yellow-300 dark:bg-gray-500  rounded-lg w-7 flex flex-col justify-center items-center">
                    <svg class="w-6 h-6 fill-black dark:fill-white hover:scale-125 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20 ">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <h3 class=" text-gray-900 dark:text-white pt-2">
                    Search
                </h3>
                <p class=" text-gray-900 dark:text-white  pt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Minus, architecto?
                </p>
            </div>
            

          
    </section>
    <!--Faq-->
    <section class="bg-yellow-200 dark:bg-gray-900 p-20 ">
        <div class="w-full bg-yellow-200 border border-yellow-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="sm:hidden ">
                <label for="tabs" class="sr-only">Select tab</label>
                <select id="tabs"
                    class="bg-yellow-200 border-0 border-b border-yellow-200 text-gray-900 text-sm rounded-t-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500">
                    <option >Statistics</option>
                    <option>Services</option>
                    <option>FAQ</option>
                </select>
            </div>
            <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400"
                id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                <li class="w-full">
                    <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab"
                        aria-controls="stats" aria-selected="true"
                        class="inline-block w-full p-4 rounded-tl-lg bg-yellow-200 hover:bg-yellow-300 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Statistics</button>
                </li>
                <li class="w-full">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                        aria-controls="about" aria-selected="false"
                        class="inline-block w-full p-4 bg-yellow-200 hover:bg-yellow-300 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Services</button>
                </li>
                <li class="w-full">
                    <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq"
                        aria-selected="false"
                        class="inline-block w-full p-4 rounded-tr-lg bg-yellow-200 hover:bg-yellow-300 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 ">FAQ</button>
                </li>
            </ul>
            <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                <div class="hidden p-4 bg-yellow-300 rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel"
                    aria-labelledby="stats-tab">
                    <dl
                        class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                            <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                            <dd class="text-gray-500 dark:text-gray-400">Public repositories</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                            <dd class="text-gray-500 dark:text-gray-400">Open source projects</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">1B+</dt>
                            <dd class="text-gray-500 dark:text-gray-400">Contributors</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">90+</dt>
                            <dd class="text-gray-500 dark:text-gray-400">Top Forbes companies</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">4M+</dt>
                            <dd class="text-gray-500 dark:text-gray-400">Organizations</dd>
                        </div>
                    </dl>
                </div>
                <div class="hidden p-4 bg-yellow-300 rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel"
                    aria-labelledby="about-tab">
                    <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">We invest in the
                        world’s potential</h2>
                    <!-- List -->
                    <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-red-600 dark:text-blue-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="leading-tight">Dynamic reports and dashboards</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-red-600 dark:text-blue-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="leading-tight">Templates for everyone</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-red-600 dark:text-blue-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="leading-tight">Development workflow</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-red-600 dark:text-blue-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="leading-tight">Limitless business automation</span>
                        </li>
                    </ul>
                </div>
                <div class="hidden p-4 bg-yellow-300 rounded-lg md:p-8 dark:bg-gray-800" id="faq" role="tabpanel"
                    aria-labelledby="faq-tab">
                    <div id="accordion-flush" data-accordion="collapse"
                        data-active-classes="bg-yellow-300 dark:bg-gray-800 text-gray-900 dark:text-white"
                        data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-flush-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                aria-controls="accordion-flush-body-1">
                                <span>What is Flowbite?</span>
                                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                                    interactive components built on top of Tailwind CSS including buttons, dropdowns,
                                    modals, navbars, and more.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                        href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start
                                    developing websites even faster with components on top of Tailwind CSS.</p>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                                aria-controls="accordion-flush-body-2">
                                <span>Is there a Figma file available?</span>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and
                                    designed using the Figma software so everything you see in the library has a design
                                    equivalent in our Figma file.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out the <a
                                        href="https://flowbite.com/figma/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a>
                                    based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                                aria-controls="accordion-flush-body-3">
                                <span>What are the differences between Flowbite and Tailwind UI?</span>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                                    components from Flowbite are open source under the MIT license, whereas Tailwind UI is a
                                    paid product. Another difference is that Flowbite relies on smaller and standalone
                                    components, whereas Tailwind UI offers sections of pages.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                                    Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping
                                    you from using the best of two worlds.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                                <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                    <li><a href="https://flowbite.com/pro/"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                    <li><a href="https://tailwindui.com/" rel="nofollow"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
