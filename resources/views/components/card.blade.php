<div class="relative w-80 text-white h-96">
    <img class="object-cover rounded-3xl w-full h-full" src="{{ $img }}" alt="Немає фото">
    <div class="flex flex-col gap-2 absolute justify-end pb-4 bottom-0 left-0 bg-gradient-to-t w-full h-60 from-[#1f1f1f] rounded-b-3xl px-4 hover:h-96 hover:justify-center transition-all">
        <div class="flex-1"></div>
        <div class="text-lg flex-1">{{ $title }}</div>
        <div class="flex gap-1 items-center">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
            </div>
            <p class="text-sm">{{ $likes }}</p>
        </div>
        <div class="flex justify-evenly items-center text-[#c5c5c5]">
            <div>
                <p class="text-sm">{{ $avtor }}</p>
            </div>
            <p class="flex-1 text-center text-[10px]">•</p>
            <div>
                <p class="text-sm">{{ $date }}</p>
            </div>
        </div>
    </div>
</div>