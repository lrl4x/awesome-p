@extends('cars.index')
@section('content')
<section id="header">
   
    <div class="bg-yellow-200 dark:bg-gray-900">
        <div class="p-12">
            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
               {{$carInfo->title}}<span class="text-blue-600">.</span>
            </h1>
            <div class="mt-2">

                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search" required>
                    </div>
                    <button type="submit"
                        class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="sr-only">Search </span>
                    </button>
                </form>

            </div>
        </div>


    </div>
</section>

<section id="car-type">
    <div class="bg-yellow-200 dark:bg-gray-900">
        <div class="">
            <h1 class="text-xs text-gray-900 dark:text-white ml-10">mercedes</h1>
        </div>

        <div class="flex flex-col  items-center p-10">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-2">
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="https://www.pngmart.com/files/22/Audi-RS7-PNG-File.png"
                            alt="product image" width="80%" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#" class="">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>

                        <div class="">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>

                        </div>
                    </div>
                </div>

                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="https://www.pngmart.com/files/22/Audi-RS7-PNG-File.png"
                            alt="product image" width="80%" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#" class="">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>

                        <div class="">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>

                        </div>
                    </div>
                </div>

                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="https://www.pngmart.com/files/22/Audi-RS7-PNG-File.png"
                            alt="product image" width="80%" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#" class="">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>

                        <div class="">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>

                        </div>
                    </div>
                </div>

                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="https://www.pngmart.com/files/22/Audi-RS7-PNG-File.png"
                            alt="product image" width="80%" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#" class="">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>

                        <div class="">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>

                        </div>
                    </div>
                </div>

                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="https://www.pngmart.com/files/22/Audi-RS7-PNG-File.png"
                            alt="product image" width="80%" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#" class="">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>

                        <div class="">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>

                        </div>
                    </div>
                </div>


            </div>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        </div>
        
    </div>
    
    </div>
    </div>
</section>

<section id="all cars">
    <div class="bg-yellow-200 dark:bg-gray-900">
        <div class="">
            <h1 class="text-xs text-gray-900 dark:text-white ml-10">ALL CARS</h1>
        </div>

        <div class="flex flex-col  items-center p-10">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-2">
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="https://www.pngmart.com/files/22/Audi-RS7-PNG-File.png"
                            alt="product image" width="80%" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#" class="">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>

                        <div class="">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>

                        </div>
                    </div>
                </div>

                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="https://www.pngmart.com/files/22/Audi-RS7-PNG-File.png"
                            alt="product image" width="80%" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#" class="">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>

                        <div class="">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>

                        </div>
                    </div>
                </div>

                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="https://www.pngmart.com/files/22/Audi-RS7-PNG-File.png"
                            alt="product image" width="80%" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#" class="">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>

                        <div class="">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>

                        </div>
                    </div>
                </div>

                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="https://www.pngmart.com/files/22/Audi-RS7-PNG-File.png"
                            alt="product image" width="80%" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#" class="">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>

                        <div class="">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>

                        </div>
                    </div>
                </div>

                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="https://www.pngmart.com/files/22/Audi-RS7-PNG-File.png"
                            alt="product image" width="80%" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#" class="">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>

                        <div class="">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>

                        </div>
                    </div>
                </div>


            </div>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        </div>
        
    </div>
    
    </div>
    </div>
</section>

@endsection