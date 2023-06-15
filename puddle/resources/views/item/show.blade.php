@extends('layouts.main')
@section('title')
    {{ $item->name }}
@endsection
@section('content')
    <div class="grid grid-cols-5 gap-6">
        <div class="col-span-3">
            <img src="{{asset( '/storage/app/'.$item->image )}}" class="rounded-xl">
        </div>

        <div class="col-span-2 p-6 bg-gray-100 rounded-xl">
            <h1 class="mb-6 text-3xl">{{ $item->name }}</h1>
            <p class="text-gray-500 "><strong>Цена: </strong>{{ $item->price }}</p>
            <p class="text-gray-500 "><strong>Продавец: </strong>{{ $item->user_id }}</p>


            <p class="text-gray-700">
                <strong class="text-gray-500">Описание:</strong><br>
                {{ $item->description }}
            </p>


            @if( $item->user_id == $id )
            <div class="mt-6 p-6 bg-white rounded-xl">
                <p>Это ваше объявление</p>
                <a href="{{ route('items.edit', $item) }}" class="inline-block mt-6 px-6 py-3 text-lg font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-700">Редактировать</a>
                <form action="{{ route('items.delete', $item->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <!--<a href="" class="inline-block mt-6 px-6 py-3 text-lg font-semibold bg-red-500 text-white rounded-xl hover:bg-red-700">Удалить</a>-->
                    <input class="inline-block mt-6 px-6 py-3 text-lg font-semibold bg-red-500 text-white rounded-xl hover:bg-red-700" type="submit" value="Удалить">
                </form>
            </div>
            @else

            <a href="{% url 'conversation:new' item.id %}" class="inline-block mt-6 px-6 py-3 text-lg font-semibold bg-teal-500 text-white rounded-xl hover:bg-teal-700">Связаться с продавцом</a>

            @endif

        </div>
    </div>
    <!--
    <div class="mt-6 px-6 py-12 bg-gray-100 rounded-xl">
        <h2 class="mb-12 text-2xl text-center">Рекомендуемые товары</h2>

        <div class="grid grid-cols-3 gap-3">
            {% for item in related_items %}
            <div>
                <a href="{% url 'item:detail' item.id %}">
                    <div>
                        <img src="" class="rounded-t-xl">
                    </div>

                    <div class="p-6 bg-white rounded-b-xl">
                        <h2 class="text-2xl"></h2>
                        <p class="text-gray-500">Цена: </p>
                    </div>
                </a>
            </div>
            {%  endfor %}
        </div>
    </div>
-->
@endsection
