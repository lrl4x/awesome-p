@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="bg-yellow-200 dark:bg-gray-900 h-auto flex flex-col justify-center p-1 pt-12 l:p-0 ">

            <div class="flex flex-col items-center justify-center bg-blue-90 ">
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    We invest in the world’s potential</h1>
                <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl  xl:px-48 dark:text-gray-400">Here at
                    Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and
                    drive
                    economic growth.</p>
            </div>

            <div class="flex flex-row justify-end ">
                <div class="max-w-xs overflow-hidden bg-cover bg-no-repeat">
                    <img class="h-32 min-sm:h-20   transition duration-300 ease-in-out hover:scale-110 relative -left-3"
                        src="https://purepng.com/public/uploads/large/purepng.com-red-porsche-911-carrera-carcarvehicletransportporsche-961524669275lrfxn.png"
                        alt="">
                </div>
                <div class="max-w-xs overflow-hidden bg-cover bg-no-repeat">
                    <img class="h-32 min-sm:h-10 transition duration-300 ease-in-out hover:scale-110 relative left-3"
                        src="https://th.bing.com/th/id/R.74e916f15548ddeec4d31dbe76c2eb73?rik=MhPFAMAgUaJMXg&riu=http%3a%2f%2fpluspng.com%2fimg-png%2f-1812.png&ehk=edUcYwTIlKFVfXYOxQvRzjyRdHzkQoOcaZ2C6iOKAAk%3d&risl=&pid=ImgRaw&r=0"
                        alt="bmw">
                </div>
            </div>


    </section>

    <section id="period">
        <div class="bg-gray-200  dark:bg-gray-200 h-96 flex flex-row items-center justify-between ">
            <div class=" w-[30%] ml-3">
                <img class="mb-2 h-32 w-full hover:scale-125"
                    src="https://th.bing.com/th/id/OIP.zZ_UbqvQ5ngrVw-A364PPAHaEK?w=278&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    alt="maintenance1">
                <img class="h-32 w-full hover:scale-125"
                    src="https://th.bing.com/th/id/OIP.2XFYdqhLQt2t93jLwkal1gHaE8?w=248&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    alt="maintenance2">
            </div>

            <div class="container mx-auto text-center">
                <h3
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Perioud time</h3>
                <p
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-500 md:text-5xl lg:text-6xl dark:text-gray-900">
                    Lorem ipsum dolor sit amet consectetur a.
                </p>
            </div>

        </div>


        </div>
    </section>

    <section id="">
        <div id="carouselExampleCaptions" class="relative h-screen bg-yellow-200 dark:bg-gray-900" data-te-carousel-init
            data-te-carousel-slide>

            <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                data-te-carousel-indicators>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 2"></button>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 3"></button>
            </div>
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade data-te-carousel-item data-te-carousel-active>
                    <video class="w-full" autoplay loop muted>
                        <source src="https://tecdn.b-cdn.net/img/video/Lines.mp4" type="video/mp4" />
                    </video>
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">First slide label</h5>
                        <p>
                            Some representative placeholder content for the first slide.
                        </p>
                    </div>
                </div>
                <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade data-te-carousel-item>
                    <video class="w-full" autoplay loop muted>
                        <source src="https://tecdn.b-cdn.net/img/video/Lines.mp4" type="video/mp4" />
                    </video>
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">Second slide label</h5>
                        <p>
                            Some representative placeholder content for the second slide.
                        </p>
                    </div>
                </div>
                <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade data-te-carousel-item>
                    <video class="w-full" autoplay loop muted>
                        <source src="https://tecdn.b-cdn.net/img/video/Lines.mp4" type="video/mp4" />
                    </video>
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">Third slide label</h5>
                        <p>
                            Some representative placeholder content for the third slide.
                        </p>
                    </div>
                </div>
            </div>
            <button
                class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
            </button>
            <button
                class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
            </button>
        </div>
    </section>

    <section id="Details of the website">
        <div class="bg-yellow-200 dark:bg-gray-900 h-auto flex flex-col items-center p-12">
            <div class="bg-red-900 dark:bg-blue-800 rounded-full w-fit flex justify-center hover:shadow-lg">
                <h1 class="font-extrabold leading-none tracking-tight text-white  dark:text-gray-100 p-1">
                    SELECT YOUR CAR
                </h1>
            </div>

            <div class="bg-gray-900 dark:bg-white  h-96 mt-3 w-full rounded-3xl opacity-80 flex justify-between  ">

                <div class=" container mx-auto p-2 grid grid-cols-6  gap-2 w-full ">
                    <div>
                        <a href="{{route('cars.show', 'bmw')}}">
                            <img class="h-6 max-w-full rounded-lg"
                                src="https://th.bing.com/th/id/R.f7f4109fb6e021b080139b28b036cf59?rik=zpuSE3DOQ1bC1Q&pid=ImgRaw&r=0"
                                alt="">
                            </a>

                    </div>
                    <div>
                        <a href="{{route('cars.show', 'KIA')}}">
                            <img class="h-6 max-w-full rounded-lg"
                                src="https://th.bing.com/th/id/R.11c17a8cffdce4bc047102db49a94a51?rik=YMKOe232a1ee3w&riu=http%3a%2f%2flogos-download.com%2fwp-content%2fuploads%2f2016%2f02%2fBMW_logo_big_transparent_png.png&ehk=AhLghiJcc6OJgtYYdNOiiM061S%2fa11BCNRbBYQtUBjI%3d&risl=&pid=ImgRaw&r=0"
                                alt="">
                        </a>
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.1e0abc8926c001adbc10a9fc395fed50?rik=U1OUsfrQbCZQYQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2faudi-logo-png-audi-logo-rings-symbol-4880.png&ehk=X02d5HuUWJ8hWO5ZyroCb7jpGE%2fGj1b8D2KRK5XoY78%3d&risl=&pid=ImgRaw&r=0"
                            alt="">
                    </div>

                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.b4c1d1e8b303191cca43edfcd88a1e7c?rik=qFkt7AOl4rKEmQ&pid=ImgRaw&r=0"
                            alt="">
                    </div>


                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.7f3c8507b9d5eea32869a0124674a63d?rik=ffNo1E8ILppazQ&riu=http%3a%2f%2fpngimg.com%2fuploads%2fcar_logo%2fcar_logo_PNG1667.png&ehk=bHVzvjpqTKRVFQHVicQgtIsdIsneSZTad4bCD5yDCNI%3d&risl=&pid=ImgRaw&r=0"
                            alt="">
                    </div>

                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/OIP.a__x3W7fUGPcbCCHaxfkuAHaEc?pid=ImgDet&rs=1" alt="">
                    </div>

                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.f2d85781b68aa7721702a79ff524ab0e?rik=EYOxhpAB0FSKYQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fcar-logo-mazda-1920.png&ehk=MZqdIW2lMq63L2bGLl5%2ftJ3bfC8F7X7sN1REgfFgsK4%3d&risl=&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.baea2af717e106c715c377b5199cde18?rik=WoO%2b%2bEvxi%2b%2f5Fg&riu=http%3a%2f%2fpngimg.com%2fuploads%2fcar_logo%2fcar_logo_PNG1637.png&ehk=U74Km3eTu5CUIZJKzHtzcG50kiYKcklW4geBpvlTLE8%3d&risl=&pid=ImgRaw&r=0"
                            alt="">
                    </div>

                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.afdc2527561852364e2d024996dea19f?rik=JKduhMgFdKMJUw&riu=http%3a%2f%2fpngimg.com%2fuploads%2fcar_logo%2fcar_logo_PNG1666.png&ehk=pyvfGbs3A3kBnd0PLV269hNBNESbpNQS146NOwhnIEE%3d&risl=&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://pluspng.com/img-png/car-logos-and-their-meanings-the-power-of-the-brand-716.png"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.7d329d8a52f3a2d6e5fa7cde481635dc?rik=%2bz3HWqjwUvgT7g&riu=http%3a%2f%2fpngimg.com%2fuploads%2fcar_logo%2fcar_logo_PNG1664.png&ehk=LdBjnxulNspfyPGsHjhizqIR%2bHi3lNCKP8%2bNaRVMPTA%3d&risl=&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://imcinspection.com/wp-content/uploads/2016/01/car_logo_PNG1643-768x626.png"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.77774748270545cc35f7014abd1e0ec4?rik=L4rlI74lRZGvOQ&riu=http%3a%2f%2fclipart-library.com%2fnew_gallery%2f526149_car-logo-png.png&ehk=rU9VxIUcYMd2f3M4HDVaEAYmmB3Aez69Qajc2I36oyQ%3d&risl=&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://eliteracingweb.files.wordpress.com/2017/08/car_logo_png1661.png?w=594"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg" src="https://pluspng.com/img-png/car-logo-suzuki-3000.png"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://pngimg.com/uploads/car_logo/car_logo_PNG1644.png" alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://imcinspection.com/wp-content/uploads/2016/01/car_logo_PNG1647-1024x768.png"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://imcinspection.com/wp-content/uploads/2016/01/car_logo_PNG1653-1024x566.png"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.4eb01cdd3aaedf3acb148ad77d9e1f1f?rik=qM8w5tMHxgOzpg&riu=http%3a%2f%2fpngimg.com%2fuploads%2fcar_logo%2fcar_logo_PNG1642.png&ehk=M34NHc5VM%2fxeNlNLTyyuKI7lnoYuysQKAT5BxSKr3jo%3d&risl=&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.95ccf9387997fcaccaa4c1b8b0da896e?rik=e8jGJXwDGZw7XQ&riu=http%3a%2f%2fpngimg.com%2fuploads%2fcar_logo%2fcar_logo_PNG1646.png&ehk=Y0E7QJJYQ4rLt6X4J%2fCvMlYloRdwuZ03RxzQMK%2fA1%2b4%3d&risl=&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.35a49e20517655572b1929470e0db323?rik=Qk5X6J4RiCqH%2bg&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.2837f8e46063f860cc29b3538124d506?rik=CziAXq%2f5tF4PVg&riu=http%3a%2f%2fwww.carlogos.org%2flogo%2fBugatti-b-logo-1366x768.png&ehk=IU%2bF%2bo3M7r7GbclZyPilxuolTtLnvHJqSMO6U%2f6Bbuw%3d&risl=&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.249968a2cbd440b89eecec59d14943ee?rik=%2bKt9AnthFjej7Q&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.8212e3207e68b986fa25423918bb91d7?rik=TDeTYE5BfkR%2fDg&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.fdd072e63cfcae6dbdf76cbf6160455e?rik=%2bIN%2fnrveasnyVg&riu=http%3a%2f%2fwww.carlogos.org%2flogo%2fDodge-logo-2011-3840x2160.png&ehk=8q7RUtO1aFxrdpoUrTUf8v2LLnpZj52ntpkE3Rami%2fg%3d&risl=&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.582409d920df279359d71b8d7cabd3ae?rik=NH3jQ5%2bioPSmWg&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.eb526c8312c2595be4893cc448d37625?rik=XqiTgS0cE9gJ6Q&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.386eb9327cd4ea1c3e48b788b67abd33?rik=CrtQC39emDUQRA&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.10b423dd4e4b1678ac67cb1ad81bfde2?rik=GZnWmMXaVhA7Jg&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div>
                        <img class="h-6 max-w-full rounded-lg"
                            src="https://th.bing.com/th/id/R.8a3fc23cde25092334143c251f21f13a?rik=n58pBrpH8RGDqA&pid=ImgRaw&r=0"
                            alt="">
                    </div>


                </div>









            </div>
    </section>
@endsection
