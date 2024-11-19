@extends('layouts.main')

@section('title', 'BLOGS: Головна')

@section('content')
<x-header />
<main class="flex flex-col border-y-2 border-solid border-black">
    <div class="flex justify-center w-full mt-5 ">
        <form action="">
            <div class="relative">
                <div class="absolute left-1 top-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 15.75-2.489-2.489m0 0a3.375 3.375 0 1 0-4.773-4.773 3.375 3.375 0 0 0 4.774 4.774ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <input class="border-2 border-solid w-96 border-black pl-7 px-2 text-lg rounded-lg placeholder:italic" type="text" placeholder="Пошук">
            </div>
        </form>
    </div>

    <div class="flex justify-center w-full my-5">
        <div class="flex gap-10 justify-start w-2/3 flex-wrap">
            <div class="flex flex-col bg-[#f8f8f8]  items-center gap-2 shadow-xl rounded-xl p-5 hover:-translate-y-5 hover:shadow-2xl transition-all">
                <div class="w-48 h-48">
                    <img class="rounded-[50%] object-cover w-full h-full" src="https://th.bing.com/th/id/OIP.WmlqMKtqAkWGnslvXbbIYAAAAA?w=350&h=350&rs=1&pid=ImgDetMain" alt="">
                </div>
                <div class="text-center">
                    <h3 class="text-lg">Костик Юля</h3>
                    <div class="mt-2">
                        <ul>
                            <li>Lorem ipsum dolor</li>
                            <li>Lorem ipsum dolor</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex flex-col bg-[#f8f8f8]  items-center gap-2 shadow-xl rounded-xl p-5 hover:-translate-y-5 hover:shadow-2xl  transition-all">
                <div class="w-48 h-48">
                    <img class="rounded-[50%] object-cover w-full h-full" src="https://th.bing.com/th/id/OIP.WmlqMKtqAkWGnslvXbbIYAAAAA?w=350&h=350&rs=1&pid=ImgDetMain" alt="">
                </div>
                <div class="text-center">
                    <h3 class="text-lg">Костик Юля</h3>
                    <div class="mt-2">
                        <ul>
                            <li>Lorem ipsum dolor</li>
                            <li>Lorem ipsum dolor</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex flex-col bg-[#f8f8f8]  items-center gap-2 shadow-xl rounded-xl p-5 hover:-translate-y-5 hover:shadow-2xl  transition-all">
                <div class="w-48 h-48">
                    <img class="rounded-[50%] object-cover w-full h-full" src="https://th.bing.com/th/id/OIP.WmlqMKtqAkWGnslvXbbIYAAAAA?w=350&h=350&rs=1&pid=ImgDetMain" alt="">
                </div>
                <div class="text-center">
                    <h3 class="text-lg">Костик Юля</h3>
                    <div class="mt-2">
                        <ul>
                            <li>Lorem ipsum dolor</li>
                            <li>Lorem ipsum dolor</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex flex-col bg-[#f8f8f8]  items-center gap-2 shadow-xl rounded-xl p-5 hover:-translate-y-5 hover:shadow-2xl  transition-all">
                <div class="w-48 h-48">
                    <img class="rounded-[50%] object-cover w-full h-full" src="https://th.bing.com/th/id/OIP.WmlqMKtqAkWGnslvXbbIYAAAAA?w=350&h=350&rs=1&pid=ImgDetMain" alt="">
                </div>
                <div class="text-center">
                    <h3 class="text-lg">Костик Юля</h3>
                    <div class="mt-2">
                        <ul>
                            <li>Lorem ipsum dolor</li>
                            <li>Lorem ipsum dolor</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex flex-col bg-[#f8f8f8]  items-center gap-2 shadow-xl rounded-xl p-5 hover:-translate-y-5 hover:shadow-2xl  transition-all">
                <div class="w-48 h-48">
                    <img class="rounded-[50%] object-cover w-full h-full" src="https://th.bing.com/th/id/OIP.WmlqMKtqAkWGnslvXbbIYAAAAA?w=350&h=350&rs=1&pid=ImgDetMain" alt="">
                </div>
                <div class="text-center">
                    <h3 class="text-lg">Костик Юля</h3>
                    <div class="mt-2">
                        <ul>
                            <li>Lorem ipsum dolor</li>
                            <li>Lorem ipsum dolor</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<x-footer />
@endsection