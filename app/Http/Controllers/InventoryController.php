<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        if ($search) {
            $inventories = Inventory::where('name', 'like', '%' . $search . '%')
                                    ->get();
        } else {
            $inventories = Inventory::all();
        }
        return view('inventories.index', compact('inventories'));
    }

    public function create()
    {
        return view('inventories.create');
    }

    public function store(Request $request)
    {
        Inventory::create($request->all());
        return redirect()->route('inventories.index')->with('success', 'El inventario fue creado correctamente');
    }

    public function show(string $id)
    {
        $inventory = Inventory::find($id);
        return view('inventories.show', compact('inventory'));
    }

    public function edit($id)
    {
        $inventory = Inventory::find($id);
        return view('inventories.edit', compact('inventory'));
    }

    public function update(Request $request, $id)
    {
        $inventory = Inventory::find($id);
        $inventory->update($request->all());
        return redirect()->route('inventories.index')->with('success', 'El inventario se ha modificado correctamente');
    }

    public function destroy(string $id)
    {
        $inventory = Inventory::find($id);
        $inventory->delete();
        return redirect()->route('inventories.index')->with('success', 'El inventario fue eliminado correctamente');
    }
}
