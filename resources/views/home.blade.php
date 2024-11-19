@extends('layouts.main')

@section('title', 'BLOGS: Головна')

@section('content')
<x-header />
<main class="flex flex-col">
    <div class="relative">
        <div class="flex h-[32rem] gap-5 border-solid border-b-2 pb-3 border-black">
            <div class="flex-1">
                <img class="object-cover h-full w-full grayscale-[70%] blur-[2px]" src="https://www.ixbt.com/img/n1/news/2023/6/1/ixbtmedia_young_caucasian_woman_looking_at_photo_on_smartphone_c9877e21-3b3a-4dcc-9bf5-52ec917f6d9a_large.png" alt="">
            </div>
            <div class="flex-none">
                <img class="object-cover h-full w-full grayscale-[70%] blur-[2px]" src="https://media.istockphoto.com/id/517188688/ru/%D1%84%D0%BE%D1%82%D0%BE/%D0%B3%D0%BE%D1%80%D0%BD%D1%8B%D0%B9-%D0%BB%D0%B0%D0%BD%D0%B4%D1%88%D0%B0%D1%84%D1%82.jpg?s=2048x2048&w=is&k=20&c=BmMwfGRywKjGY5NNnVxTmxt9UfKPOFklMDOpmScHmxg=" alt="">
            </div>
            <div class="flex-1">
                <img class="object-cover h-full w-full grayscale-[70%] blur-[2px]" src="https://sibadvokat.ru/wp-content/uploads/2021/06/foto-i-zakon-chto-delat-esli-kto-to-opublikoval-moyo-foto-730x430.jpg" alt="">
            </div>
        </div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-3xl">
            <p>Навчайся, надихайся, дій</p>
        </div>
    </div>

    <div class="pt-5 pb-10 border-b-2 border-solid border-black">
        <div class="mb-8">
            <h2 class="text-3xl text-center">Популярні</h2>
        </div>
        <div class="my-4 flex gap-3 justify-evenly">
            <x-card
                img="https://novogodnie-podarki.com.ua/image/cache/wp/lj/foto-desk/buezpjljyjkgwwgso80kck8ow0s08k.webp"
                title="Ідеї для новорічного декору, святкові рецепти та креативні подарунки."
                avtor="Користь Каріна"
                date="12 лис. 12:42"
                likes="542" />

            <x-card
                img="https://ua-reporter.com/sites/default/files/inline/images/ukrayina_byudzhetniy_turizm_byudzhetna_podorozh_po_ukrayini.jpg"
                title="Відкрийте для себе нові місця, путівники та поради для незабутніх мандрівок."
                avtor="Перець Андрій"
                date="5 лис. 13:42"
                likes="423" />

            <x-card
                img="https://ua.crp-wroclaw.com/blog/wp-content/uploads/2024/04/2151046773-1024x683.jpg.webp"
                title="Поради та мотивація для особистого зростання і досягнення цілей."
                avtor="Корте Миколай"
                date="15 лис. 11:42"
                likes="658" />
        </div>
    </div>

    <div class="flex flex-col justify-end text-end py-12 bg-[#ececec]  pl-[50%] pr-10 border-b-2 border-solid border-black">
        <p class="text-4xl font-bold">“Не чекай ідеального моменту.
            Створи його.”</p>
        <p class="text-2xl">— Джордж Бернард Шоу</p>
    </div>

    <div class="pt-5 pb-10 border-b-2 border-solid border-black">
        <div class="mb-8">
            <h2 class="text-3xl text-center">Рекомендації</h2>
        </div>
        <div class="my-4 flex gap-3 justify-evenly">
            <x-card
                img="https://novogodnie-podarki.com.ua/image/cache/wp/lj/foto-desk/buezpjljyjkgwwgso80kck8ow0s08k.webp"
                title="Ідеї для новорічного декору, святкові рецепти та креативні подарунки."
                avtor="Користь Каріна"
                date="12 лис. 12:42"
                likes="542" />

            <x-card
                img="https://ua-reporter.com/sites/default/files/inline/images/ukrayina_byudzhetniy_turizm_byudzhetna_podorozh_po_ukrayini.jpg"
                title="Відкрийте для себе нові місця, путівники та поради для незабутніх мандрівок."
                avtor="Перець Андрій"
                date="5 лис. 13:42"
                likes="423" />

            <x-card
                img="https://ua.crp-wroclaw.com/blog/wp-content/uploads/2024/04/2151046773-1024x683.jpg.webp"
                title="Поради та мотивація для особистого зростання і досягнення цілей."
                avtor="Корте Миколай"
                date="15 лис. 11:42"
                likes="658" />
        </div>
    </div>

</main>
<x-footer />
@endsection