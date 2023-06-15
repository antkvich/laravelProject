@extends('layouts.main')
@section('title')
    Новый товар
@endsection
@section('content')
    <form method="post" id="store" action="{{route('items.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="inline-block mb-2">Название товара</label><br>
            <input name="name" class="w-full py-4 px-6 rounded-xl" type="text" id="title" placeholder="Название">
        </div>

        <div class="mb-3">
            <label class="inline-block mb-2">Категория</label><br>
                <select name="category_id" class="w-full py-4 px-6 rounded-xl" form="store">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                </select>
        </div>

        <div class="mb-3">
            <label class="inline-block mb-2">Описание товара</label><br>
            <textarea name="description" class="w-full py-4 px-6 rounded-xl" id="description"></textarea>
        </div>

        <div class="mb-3">
            <label class="inline-block mb-2">Цена</label><br>
            <input name="price" class="w-full py-4 px-6 rounded-xl" type="text" id="price" placeholder="Цена">
        </div>

        <div class="mb-3">
            <label class="inline-block mb-2">Картинка</label><br>
            <input name="image" class="w-full py-4 px-6 rounded-xl" type="file" id="image">
        </div>



        <button type="submit" class="mt-6 py-4 px-8 text-lg bg-teal-500 hover:bg-teal-700 rounded-xl text-white">Submit</button>

    </form>

@endsection
