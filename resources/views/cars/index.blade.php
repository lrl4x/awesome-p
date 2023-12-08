<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div id="a">

        <header>
            @include('layouts.header')

        </header>

        <section id="body">
            <div class="bg-yellow-200 dark:bg-gray-900">
                @if (isset($cars))
                    <div class="p-12">
                        
                        {{-- <h1
                            class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                            {{$cars[0]->name}}

                            <span class="text-blue-600">.</span>
                        </h1> --}}

                        <div class="mt-2">

                            <form class="flex items-center" action="{{ route('cars.search') }}" method="GET">
                              
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="search" id="simple-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search" name="query" required>
                                </div>
                                <button type="submit"
                                    class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                   <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </form>

                             <div class="mt-2 flex">
                                <a href="{{ route('cars.create') }}"
                                    class="inline-flex mr-1 px-5 py-3 text-base font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800  dark:bg-blue-700 dark:hover:bg-blue-800 ">ADD
                                    NEW CAR</a>
                            
                            </div>

                        </div>
                    </div>
                    @else

                    <p class="text-center mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">There are no cars to display</p>
                
                    <div class="flex justify-center pt-12">
                         <a href="{{ route('cars.create') }}"
                                    class="inline-flex mr-1 px-5 py-3 text-base font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800  dark:bg-blue-700 dark:hover:bg-blue-800 ">ADD
                                    NEW CAR</a>
                                </div>
                                
                    </div>
                   
                @endif

            </div>
        </section>


        <section id="car-type">
            @if(isset($cars))
            <div class="bg-yellow-200 dark:bg-gray-900">

                <div class="flex flex-col  items-center p-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-2">
                        @if(count($cars) >0)
                        @foreach ($cars as $car)
                        
                    
                            <div
                                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="cars/show/{{ $car->id }}" class="flex justify-center">
                                    <img class="p-8 rounded-t-lg" src="/images/{{ $car->image_path }}"
                                        alt="product image" width="80%" />
                                </a>
                                <div class="px-5 pb-5">
                                    <a href="#" class="">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            {{ $car->name }}</h5>
                                    </a>
                                    <div class="">
                                        <span
                                            class="text-3xl font-bold text-gray-900 dark:text-white">{{ $car->description }}</span>

                                    </div>
                                    <div class="">
                                        <span
                                            class="text-3xl font-bold text-gray-900 dark:text-white">${{ $car->price }}</span>

                                    </div>
                                    <div class="">
                                        <span class="text-3xl font-bold text-gray-900 dark:text-white">USER
                                            {{ $car->user_id }} </span>

                                    </div>
                                </div>
                            </div>
                     
                        @endforeach
                        @endif


                    </div>
                 
                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                </div>

            </div>

    </div>
    </div>   
    @else
    <p>No result found!</p>
    @endif
    </section>

    {{-- all cars section --}}
    {{-- <section id="all cars">
        <div class="bg-yellow-200 dark:bg-gray-900">
            <div class="">
                <h1 class="text-xs text-gray-900 dark:text-white ml-10">ALL CARS</h1>
            </div>

            <div class="flex flex-col  items-center p-10">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-2">
                    @foreach ($cars as $car)
                    <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="cars/show/{{ $car->id }}" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="/images/{{ $car->image_path }}"
                            alt="product image" width="80%" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#" class="">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                {{ $car->name }}</h5>
                        </a>
                        <div class="">
                            <span
                                class="text-3xl font-bold text-gray-900 dark:text-white">{{ $car->description }}</span>

                        </div>
                        <div class="">
                            <span
                                class="text-3xl font-bold text-gray-900 dark:text-white">${{ $car->price }}</span>

                        </div>
                        <div class="">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">USER
                                {{ $car->user_id }} </span>

                        </div>
                    </div>
                </div>
                    @endforeach


                </div>
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            </div>

        </div>

        </div>
        </div>
    </section> --}}

    <footer>
        @include('layouts.footer')
    </footer>





    <script src="resources/js/app.js"></script>

</body>

</html>
