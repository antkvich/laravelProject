@extends('layouts.main')
@section('title')
    Товары
@endsection
@section('content')
    <div class="mt-6 px-6 py-12 bg-gray-100 rounded-xl">
        <h2 class="mb-12 text-2xl text-center">Новые товары</h2>

        <div class="grid grid-cols-3 gap-3">
            @foreach($items as $item)
            <div>
                <a href="{{route('items.show', $item)}}">
                    <div>
                        <img src="{{ asset("storage/".$item->image) }}" class="rounded-t-xl ">
                    </div>

                    <div class="p-6 bg-white rounded-b-xl">
                        <h2 class="text-2xl">{{$item->name}}</h2>
                        <p class="text-gray-500">Цена: ${{$item->price}} </p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="mt-6 px-6 py-12 bg-gray-100 rounded-xl">
        <h2 class="mb-12 text-2xl text-center">Категории</h2>

        <div class="grid grid-cols-3 gap-3">
            @foreach($categories as $category)
            <div>
                <a href="#">

                    <div class="p-6 bg-white rounded-b-xl">
                        <h2 class="text-2xl">{{ $category->name }}</h2>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
