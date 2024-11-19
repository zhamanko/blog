@extends('layouts.main')

@section('title', 'BLOGS: Головна')

@section('content')
<x-header />
<main class="flex flex-col border-b-2 border-solid border-black">
    <div class="h-80">
        <img class="object-cover h-full w-full " src="https://novogodnie-podarki.com.ua/image/cache/wp/lj/foto-desk/buezpjljyjkgwwgso80kck8ow0s08k.webp" alt="">
    </div>
    <div class=" mt-2 flex flex-row relative border-y-2 border-black border-solid py-4 px-14">
        <div class="flex flex-row items-center gap-5 flex-1">
            <div class="w-[110px] h-[110px] min-w-[110px] min-h-[110px]">
                <img class="rounded-[50%] object-cover w-full h-full" src="https://photo-static-api.fotomore.com/creative/vcg/veer/nowarter800/new/VCG41N900619072.jpg" alt="avtor-foto">
            </div>
            <div>
                <h3 class="text-lg">Криста Каріна</h3>
            </div>
        </div>
        <div class="flex flex-col justify-center gap-2">
            <div class="flex gap-2 items-center">
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>
                    <p>846</p>
                </div>
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                    </svg>
                    <p>234</p>
                </div>
            </div>
            <p class="text-[#777777]">12 листопада 12:45</p>
        </div>
    </div>
    <div class="py-4 px-14 text-lg">
        <h3 class="text-center text-xl font-bold">Ідеї для новорічного декору, святкові рецепти та креативні подарунки.</h3>
        <br>
        <p>Зима — це чарівний час, коли навіть повітря насичене атмосферою свята. Наближення Нового року завжди приносить бажання створити щось особливе, що буде дарувати радість і тепло близьким. У цій статті ми поділимося з вами найкращими ідеями для новорічного декору, смачними святковими рецептами та креативними ідеями для подарунків, які точно створять святковий настрій.</p>
        <br>
        <p>Ідеї для Новорічного Декору</p>
        <br>
        <p>Натуральні елементи у декорі
            Додайте свіжості вашому дому, використовуючи натуральні матеріали. Створіть гірлянди з ялинкових гілок, шишок та апельсинів, висушених у духовці. Їх можна прикрасити червоними стрічками або мініатюрними прикрасами. Такі елементи не лише гарно виглядають, але й приємно пахнуть.
            <br>
            <br>
            Світлові інсталяції
            Вогники створюють справжнє новорічне диво. Спробуйте зробити самостійно інсталяцію зі світлодіодних гірлянд у формі сніжинок або зірок. Можна обмотати гірлянду навколо дзеркал, карнизів або створити світлові баночки, заповнивши їх ялинковими прикрасами та лампочками.
            ...
        </p>

    </div>
    <div class="border-t-2 border-solid border-black py-4 px-14">
        <div class="flex flex-row items-center gap-5">
            <div class="w-[100px] h-[90px] min-w-[80px] min-h-[80px]">
                <img class="rounded-[50%] object-cover w-full h-full" src="https://th.bing.com/th/id/OIP.jryuUgIHWL-1FVD2ww8oWgHaHa?rs=1&pid=ImgDetMain" alt="avtor-foto">
            </div>
            <div class="w-full">
                <textarea class="border-2 border-solid placeholder:italic p-2 w-full h-full border-[#777777] rounded-lg" placeholder="Ваш коментар" name="comment" id=""></textarea>
                <div class="flex flex-row justify-end">
                    <button class="bg-black text-white px-10 py-2 rounded-lg">Залишити коментар</button>
                </div>
            </div>
        </div>
    </div>

    <div class="pl-36 pr-16 pb-10">
        <div class="flex flex-row items-center gap-5 rounded-lg shadow-md p-3 bg-[#fafaff]">
            <div class="w-[100px] h-[90px] min-w-[80px] min-h-[80px]">
                <img class="rounded-[50%] object-cover w-full h-full" src="https://th.bing.com/th/id/OIP.WmlqMKtqAkWGnslvXbbIYAAAAA?w=350&h=350&rs=1&pid=ImgDetMain" alt="avtor-foto">
            </div>
            <div class="w-full">
                <h3 class="text-lg">Криста Каріна</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, quae.</p>
                <p class="text-[#777777] text-end">12 листопада 12:45</p>
            </div>
        </div>
    </div>

</main>
<x-footer />
@endsection