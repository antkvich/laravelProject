<!doctype html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') | Рынок</title>
</head>


<body>
<nav class="py-6 px-6 flex justify-between items-center border-b border-gray-200">
    <a href="/" class="text-xl font-semibold">РЫНОК</a>
    <div class="space-x-6">

        <a href="#" class="text-lg font-semibold hover:text-gray-500">Поиск</a>
        @auth
        <a href="{{ route('items.create') }}" class="text-lg font-semibold hover:text-gray-500">Создать объявление</a>
        <a href="#" class="px-6 py-3 text-lg font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-700">Чат</a>
        <a href="#" class="px-6 py-3 text-lg font-semibold bg-gray-500 text-white rounded-xl hover:bg-gray-700">Мои товары</a>
        <a href="{{ route('logout') }}" class="px-6 py-3 text-lg font-semibold bg-red-500 text-white rounded-xl hover:bg-red-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Выход</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endauth
        @guest
            <a href="{{ route('register') }}" class="px-6 py-3 text-lg font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-700">Регистрация</a>
            <a href="{{ route('login') }}" class="px-6 py-3 text-lg font-semibold bg-gray-500 text-white rounded-xl hover:bg-gray-700">Вход</a>
        @endguest
    </div>

</nav>
<div class="px-6 py-6">
    @yield('content')
</div>

<footer class="py-6 px-6 flex bg-gray-800">
    <div class="w-2/3 pr-10">
        <h3 class="mb-5 font-semibold text-gray-400">About</h3>
        <p class="text-lg text-gray-500">Developed by Anton Kalesnikovich</p>
    </div>
    <div class="w-1/3">
        <h3 class="mb-5 font-semibold text-gray-400">Menu</h3>

        <ul class="space-y-2">
            <li><a href="#" class="text-lg text-teal-500 hover:text-teal-700">About</a> </li>
            <li><a href="#" class="text-lg text-teal-500 hover:text-teal-700">Contact</a> </li>
            <li><a href="#" class="text-lg text-teal-500 hover:text-teal-700">Privacy and policy</a> </li>
            <li><a href="#" class="text-lg text-teal-500 hover:text-teal-700">Terms of use</a> </li>

        </ul>
    </div>
</footer>
</body>
</html>
