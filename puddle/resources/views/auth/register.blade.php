@extends('layouts.main')

@section('content')
    <div class="w-1/2 my-6 mx-auto p-6 bg-gray-100 roounded-xl">
        <h1 class="mb-6 text-3xl">Sign up</h1>

        <form method="post" action=".">


            <div class="mb-3">
                <label class="inline-block mb-2">Логин</label><br>
                <input id="name" type="text" class="w-full py-4 px-6 rounded-xl @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="inline-block mb-2">Email</label><br>
                <input id="email" type="email" class="w-full py-4 px-6 rounded-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="inline-block mb-2">Пароль</label><br>
                <div class="col-md-6">
                    <input id="password" type="password" class="w-full py-4 px-6 rounded-xl @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>

            <div class="mb-3">
                <label class="inline-block mb-2">Повтор пароля</label><br>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="w-full py-4 px-6 rounded-xl" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>



            <button class="py-4 px-8 text-lg bg-teal-500 hover:bg-teal-700 rounded-xl text-white">Зарегистрироваться</button>
        </form>
    </div>
@endsection
