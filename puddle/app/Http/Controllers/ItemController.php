<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(): View
    {
        $items = Item::all();
        $categories = Category::all();

        return view('item.index', compact('items'), compact('categories'));
    }

    public function create(): View
    {
        $items = Item::all();
        $categories = Category::all();

        return view('item.create', compact('categories'));
    }

    public function show(Item $item): View
    {
        $id = Auth::id();
        $img = Storage::url($item->image);
        return view('item.show', compact('id', 'item', 'img'));
    }

    public function edit(Item $item)
    {
        $id = Auth::id();
        if ($id != $item->user_id) {
            return redirect('/');
        }
        $categories = Category::all();

        return view('item.edit', compact('categories', 'item'));
    }

    public function update(Item $item)
    {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'image' => 'image',
            'price' => 'integer',
            'category_id' => 'integer',
        ]);
        $itemImage = $data['image'];
        $data['image'] = Storage::put('/images', $itemImage);

        $item->update($data);
        return redirect()->route('items.show', $item->id);
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'image' => 'image',
            'price' => 'integer',
            'category_id' => 'integer',
            'user_id' => 'integer',
        ]);
        $itemImage = $data['image'];
        $data['image'] = Storage::put('/images', $itemImage);
        $data['user_id'] = Auth::id();
        Item::create($data);
        return redirect('/');
    }
}
