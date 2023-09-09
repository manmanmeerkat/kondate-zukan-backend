<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::all();
        return response()->json($menu);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $menu = Menu::create($request->all());
        // return $menu
        //     ? response()->json($menu, 201)
        //     : response()->json([], 500);


        $menu = new Menu;
        $menu->name = $request->input('name');
        $menu->memo = $request->input('memo');
        $menu->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $menu = Menu::find($id);

        $menu->name = $request->name;
        $menu->memo = $request->memo;
        $menu->save();

        return response()->json($menu);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::find($id);
        $menu->delete();
    }
    public function submitform(Request $request)
    {
        // $menu = new Menu;
        // $menu->name = $request->input('name');
        // $menu->genre = $request->input('genre');
        // $menu->type = $request->input('type');
        // $menu->save();
        $formData = $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string',
            'type' => 'required|string',
            'reference_url' => 'nullable|string',
        ]);

        try {
            Menu::create($formData); // モデルを使用してデータベースに保存
            return response()->json(['message' => 'データが保存されました'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'データの保存に失敗しました'], 500);
        }
    }
}
