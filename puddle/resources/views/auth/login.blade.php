@extends('layouts.main')

@section('content')
    <div class="w-1/2 my-6 mx-auto p-6 bg-gray-100 roounded-xl">
        <h1 class="mb-6 text-3xl">Вход</h1>

        <form method="post" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label class="inline-block mb-2">Email</label><br>
                <input id="email" type="email" class="w-full py-4 px-6 rounded-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="mb-3">
                <label class="inline-block mb-2">Пароль</label><br>
                <input id="password" type="password" class="w-full py-4 px-6 rounded-xl @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>



            <button type="submit" class="py-4 px-8 text-lg bg-teal-500 hover:bg-teal-700 rounded-xl text-white">Войти</button>
        </form>
    </div>
@endsection
