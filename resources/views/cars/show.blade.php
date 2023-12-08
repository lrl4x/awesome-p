@extends('layouts.app')
@section('content')
    <section id="">
        
        <div class="bg-yellow-200 dark:bg-gray-900">
            <div class="container m-auto text-center pt-15 pb-5 ">
                <h1 class="text-6xl font-bold text-black dark:text-gray-100">
                    {{ $car->name }}
                </h1>
            </div>

            <div class="container m-auto text-center pt-15 pb-5  text-black dark:text-gray-100">
                <div class="flex justify-center">
                    <img class="object-cover w-full " src="/images/{{ $car->image_path }}" alt="">
                </div>
            </div>

            <div class="text-l py-8 leading-6 text-black dark:text-gray-100 text-center">
                {{ $car->description }}
            </div>
            <div class="container m-auto text-center pt-15 pb-5  text-black dark:text-gray-100">
                PRICE: <span>{{ $car->price }} SAR</span>
            </div>

            <div class="container m-auto text-center pt-15 pb-5  text-black dark:text-gray-100">
                PHONE NUMBER : +966 {{ $car->phone }}
            </div>

            <div class="container m-auto text-center pt-15 pb-5  text-black dark:text-gray-100">
                REGION : {{ $car->region }}
            </div>

            <div class="container m-auto text-center pt-15 pb-5  text-black dark:text-gray-100">
                {{-- USER : {{$car->car()->user()}} --}}
            </div>

            <div class="pb-5 flex ">
                @if (Auth::user() && Auth::user()->id == $car->user_id)
                    <a href="cars/index/cars/show/{{ $car->id }}/edit"
                        class="bg-gray-700 text-gray-100 
                        py-4 px-5 rounded-lg 
                        font-bold uppercase text-l 
                        place-self-start ml-2">EDIT
                        CAR INFORMATION</a>



                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete"
                            class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start ml-2">

                    </form>
                @endif

            </div>

        </div>

    </section>
@endsection
