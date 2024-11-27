<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function fetchItemList()
    {
        $items = Item::all();
        return view('item_list', compact('items'));
    }

    public function showAddItemForm()
    {
        return view('add_item');
    }

    public function storeItem(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Item::create($request->all());

        return redirect()->route('showAddItemForm')
            ->with('success', 'Item created successfully.');
    }
}
