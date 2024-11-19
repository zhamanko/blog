@extends('layouts.main')

@section('title', 'BLOGS: Головна')

@section('content')
<x-header />
<main class="flex flex-col justify-center items-center pt-64 pb-80 border-y-2 border-solid border-black">
    <div>
        <form action="" class="flex flex-col gap-4 border-black border-2 p-8 rounded-lg w-96">
            <h1 class="text-center text-lg font-bold">Авторизація</h1>
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input class="border-2 border-solid border-black px-2 text-lg rounded-lg" type="email" name="email" id="email">
            </div>
            <div class="flex flex-col">
                <label for="password">Пароль</label>
                <input class="border-2 border-solid border-black px-2 text-lg rounded-lg" type="password" name="password" id="password">
            </div>
            <button class="bg-black text-white rounded-md py-2">Увійти</button>
            <div class="flex justify-between">
                <a href="#">Забули пароль?</a>
                <a href="/sign-in">Реєстрація</a>
            </div>
        </form>
    </div>
</main>
<x-footer />
@endsection