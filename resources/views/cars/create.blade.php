@extends('layouts.app')
@section('content')
    <section id="create-form">
        <div class="container m-auto  p-12 mt-4  rounded-lg bg-[url('https://gtspirit.com/wp-content/uploads/2021/03/2022-BMW-M3-Isle-of-Man-Green-43.jpg')] bg-cover">
        <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            ADD NEW CAR
        </h1>
        <form action="{{route('cars.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            {{-- name --}}
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CAR NAME</label>
                <input type="text" id="name" name="name"
                    class="block w-full p-2 text-gray-00 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            {{-- description --}}
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    DESCRIPTION</label>
                <input type="text" id="description" name="description"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            {{-- phone --}}
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PHONE</label>
                <input type="text" id="phone" name="phone"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            {{-- region --}}
            <div>
                <label for="region" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">REGION</label>
                <input type="text" id="region" name="region"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            {{-- price --}}
            <div class="mb-6">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PRICE</label>
                <input type="text" id="price" name="price"
                    class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="py-15 ">
                <label class="bg-gray-200 hover:bg-gray-700 text-gray-700 hover:text-gray-200 transition duration-300 cursor-pointer p-5 rounded-lg font-bold uppercase ">
                    <span>
                        Select an image to upload 
                    </span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>
            
            <div class="mb-12 pb-1 pt-1 w-1/2 mt-10 text-center container m-auto">
                <button
                  class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                  type="submit"
                  data-te-ripple-init
                  data-te-ripple-color="light"
                  style=" background: linear-gradient(to right, #bbbac0, rgb(215, 243, 0), rgb(11, 6, 82),rgb(9, 0, 39)2);">
                 SUBMIT
                </button>

        </form>

   
    </div>
    </section>
@endsection
